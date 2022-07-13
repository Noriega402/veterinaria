<?php

namespace App\Filters;

use App\Models\RolModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Invited implements FilterInterface
{
	/**
	 * Do whatever processing this filter needs to do.
	 * By default it should not return anything during
	 * normal execution. However, when an abnormal state
	 * is found, it should return an instance of
	 * CodeIgniter\HTTP\Response. If it does, script
	 * execution will end and that Response will be
	 * sent back to the client, allowing for error pages,
	 * redirects, etc.
	 *
	 * @param RequestInterface $request
	 * @param array|null       $arguments
	 *
	 * @return mixed
	 */
	public function before(RequestInterface $request, $arguments = null)
	{
		// $arguments proviene de las rutas, de los filtros = auth:admin
		// dd($arguments);

		// Si no esta logeado entonces redireccionar a login
		if(!session()->is_logged){
			return redirect()->route('ingresar')->with('warning', 'Sesion no iniciada');
		}

		$user = new UserModel();
		// Si el usuario no existe
		if(!$usuario = $user->asObject()->getUserBy('id_usuario', session()->id_user)){
			session()->destroy();
			return redirect()->route('ingresar')->with('errores', 'El usuario no esta disponible');
		}
		// dd($usuario->id_usuario);

		$roles = new RolModel();

		// Si el rol no esta dentro de los $arguments (o sea los filtros) no permitira tener vista de otro lado al que no se le dio acceso.
		$rol = $roles->asObject()->getRolFilter(session()->rol);
		// dd($rol->descripcion);
		if(!in_array($rol->descripcion, $arguments)){
			throw PageNotFoundException::forPageNotFound();
		}

	}

	/**
	 * Allows After filters to inspect and modify the response
	 * object as needed. This method does not allow any way
	 * to stop execution of other after filters, short of
	 * throwing an Exception or Error.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param array|null        $arguments
	 *
	 * @return mixed
	 */
	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		//
	}
}

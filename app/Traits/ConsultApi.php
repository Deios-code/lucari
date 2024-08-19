<?php

namespace App\Traits;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use stdClass;

trait ConsultApi
{
    use UrlTrait;

    public $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    // trae los datos paginados para las tablas
    public function ApiGetDataTable($option,$param = 1)
    {
        $this->validateSession($option);
        $response = $this->client->get($this->getApiUrl($option,'?page='.$param),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        $datos = json_decode($response->getBody(), true);
        return isset($datos) ? $datos['data'] : null;
    }

    // ej: $this->ApiGetInput('tabla','filtro') ; si toca pasarle un valor junto al filtro => $this->ApiGetInput('tabla','filtro&value='.$valor);
    public function ApiGetInput($table, $param = null)
    {
        $this->validateSession($table);

        $additionalUrl = 'input/new/'.$table;

        if(isset($param)){
            $additionalUrl = $additionalUrl.'?param='.$param;
        }

        $response = $this->client->get($this->getApiUrl($additionalUrl),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        $datos = json_decode($response->getBody(), true);
        return isset($datos) ? $datos['data'] : null;
    }

    // nuevo endpoint para traer datos
    public function ApiGetData($option, $param = null)
    {
        $this->validateSession($option);
        $response = $this->client->get($this->getApiUrl($option),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        $datos = json_decode($response->getBody(), true);
        return isset($datos) ? $datos['data'] : null;
    }

    public function ApiGet($option,$param = '')
    {
        $this->validateSession($option);
        switch ($option) {
            case 'rolOrden':
                $urlEnd = 'api/input/rolOrden';
                break;
            case 'getPersonalTurno':
                //Trae el personal del turno vigente (orden del dia vigente)
                $urlEnd = 'api/turnoAsignado/turnoAsignado';
                break;
            case 'getPersonalTurnoCodigo':
                //Trae el personal del turno indicado
                $urlEnd = 'api/turnos/personalTurnoEdit/'.$param;
                break;
            case 'getPersonal':
                //Trae el personal de la estacion
                $urlEnd = 'api/personal/'.$param;
                break;
            case 'getDataTurno':
                //Trae el personal del turno indicado
                $urlEnd = 'api/turnos/'.$param.'/edit';
                break;
            case 'getEstacionEdit':
                //Trae el personal del turno indicado
                $urlEnd = 'api/estacion/'.$param.'/edit';
                break;
            case 'ordenVigente':
                $urlEnd = 'api/ordenDia/ordenVigente';
                break;
            case 'listadoAlerta':
                $urlEnd = 'api/alerta/notifyAlert';
                break;
            case 'listadoAlertaCodigos':
                $urlEnd = 'api/alerta/notifyAlertCodigos';
                break;
            case 'getMaquinas':
                $urlEnd = 'api/input/maquinas';
                break;
            case 'getMaquinasAsignadas':
                $urlEnd = 'api/alerta/maquinasAsignadas/'.$param;
                break;
            case 'getPersonalEstacion':
                $urlEnd = 'api/input/personalEstacion';
                break;
            case 'getDispositivoEstacion':
                $urlEnd = 'api/input/dispositivoEstacion';
                break;
            case 'getIconos':
                $urlEnd = 'api/input/iconos';
                break;
            case 'getPersonalAsignado':
                $urlEnd = 'api/alerta/personalAsignado/'.$param;
                break;
            case 'getMaquinasOrden':
                $urlEnd = 'api/maquina/ordenVigente';
                break;
            case 'gpsAlerta':
                $urlEnd = 'api/alerta/'.$param.'/edit';
                break;
            case 'detalleAlerta':
                $urlEnd = 'api/alerta/detailsAlert/'.$param;
                break;
            case 'verInforme':
                $urlEnd = 'api/alerta/verInforme/'.$param;
                break;
            case 'estadoInforme':
                $urlEnd = 'api/alerta/estadoInforme/'.$param;
                break;
            case 'getpersonalTurnoRol':
                $urlEnd = 'api/ordenDia/getpersonalTurnoRol/'.$param;
                break;
            case 'getTipoMaquina':
                $urlEnd = 'api/input/tipoMaquina';
                break;
            case 'getRangos':
                $urlEnd = 'api/input/rangos';
                break;
            case 'getPuntosInteres':
                $urlEnd = 'api/puntoInteres';
                break;
            case 'getEstadoMaquina':
                $urlEnd = 'api/input/estadoMaquina';
                break;
            case 'getEstadoPunto':
                $urlEnd = 'api/input/estadoPunto';
                break;
            case 'getUsuariosEstacion':
                $urlEnd = 'api/usuarios/estacion'.$param;
                break;
            case 'getListadoTurno':
                $urlEnd = 'api/input/turnos';
                break;
            case 'getTipoPunto':
                $urlEnd = 'api/input/tipoPunto';
                break;
            case 'getTipoAlerta':
                $urlEnd = 'api/input/TipoAlerta';
                break;
            case 'getEstadoAlerta':
                $urlEnd = 'api/input/estadoAlerta';
                break;
            case 'getEstadoUsuario':
                $urlEnd = 'api/input/estadoUser';
                break;
            case 'getPermisos':
                $urlEnd = 'api/input/permisos';
                break;
            case 'getTurnos':
                $urlEnd = 'api/input/turnos';
                break;
            case 'getTurnoDetail':
                $urlEnd = 'api/turnos/detail';
                break;
            case 'detailsEstacion':
                $urlEnd = 'api/estacion/detail';
                break;
            case 'AlertasActivas':
                $urlEnd = 'api/alertas/activas';
                break;
            case 'getMaquinaEdit':
                $urlEnd = 'api/maquina/'.$param.'/edit';
                break;
            case 'getPersonalEdit':
                $urlEnd = 'api/personal/'.$param.'/edit';
                break;
            case 'getPermisosUsuario':
                $urlEnd = 'api/usuarios/'.$param.'/permisos';
                break;
            case 'getDataUsuario':
                $urlEnd = 'api/usuarios/'.$param.'/edit';
                break;
            case 'usuarioEdit':
                $urlEnd = 'api/usuarios/'.$param.'/edit/admin';
                break;
            case 'getPuntoEdit':
                $urlEnd = 'api/puntoInteres/'.$param.'/edit';
                break;
            case 'getLocationByUser':
                $urlEnd = 'api/ubicacion/filter/'.$param;
                break;
            case 'gpsPersonalEstacion':
                $urlEnd = 'api/ubicacion';
                break;
            case 'historyAlert':
                $urlEnd = 'api/alerta/historyAlert';
                break;
            case 'historyAlert':
                $urlEnd = 'api/alerta/cambiosEnAlerta'.$param;
                break;
            case 'getEstadisticas':
                $urlEnd = 'api/estadistica';
                break;
            case 'getDispositivosSinAsignar':
                $urlEnd = 'api/input/dispositivoLibre';
                break;
            default:
                # code...
                break;
        }
        $url = $this->getUrl().$urlEnd;
        // dd($url);
        $response = $this->client->get($url,['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        $datos = json_decode($response->getBody(), true);
        return isset($datos) ? $datos['data'] : null;
    }

    public function ApiPost($option,$request)
    {
        $this->validateSession($option);


        switch ($option) {
            case 'crearOrden':
                $urlEnd = 'api/ordenDia';
                $url = $this->getUrl().$urlEnd;
                $response = $this->client->post($url,['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
                $body = $response->getBody()->getContents();
                $datos = json_decode($response->getBody(), true);
                return isset($datos) ? $datos['data'] : null;
                break;
            case 'registrarPersonalOrden':
                $urlEnd = 'api/personalOrden';
                break;
            case 'enviarClaveTemporal':
                $urlEnd = 'api/usuarios/recuperar-contrasenia';
                break;
            case 'asignarUsuarioATurno':
                $urlEnd = 'api/turnoAsignado';
                break;
            case 'agregarTurno':
                $urlEnd = 'api/turnos';
                break;
            case 'asignarAlerta':
                $urlEnd = 'api/alerta/responderAlerta';
                break;
            case 'asignarMovil':
                $urlEnd = 'api/alerta/asignarMovil';
                break;
            case 'asignarPersonal':
                $urlEnd = 'api/alerta/asignarPersonal';
                break;
            case 'registrarBitacora':
                $urlEnd = 'api/bitacora/storeWeb';
                break;
            case 'actualizarTipoAlerta':
                $urlEnd = 'api/alerta/tipoAlerta';
                break;
            case 'actualizarEstadoAlerta':
                $urlEnd = 'api/alerta/estadoAlerta';
                break;
            case 'actualizarMaquina':
                $urlEnd = 'api/maquina/actualizar';
                break;
            case 'actualizarPersonal':
                $urlEnd = 'api/personal/actualizar';
                break;
            case 'registrarMaquina':
                $urlEnd = 'api/maquina';
                break;
            case 'updateTurno':
                $urlEnd = 'api/turnos/actualizar';
                break;
            case 'updateTurnoUsuario':
                $urlEnd = 'api/turnoAsignado/actualizar';
                break;
            case 'updateStatusUser':
                $urlEnd = 'api/usuarios/estado';
                break;
            case 'updatePermisos':
                $urlEnd = 'api/usuarios/permisos';
                break;
            case 'updateDataUser':
                $urlEnd = 'api/usuarios/datosAdmin';
                break;
            case 'updatePassword':
                $urlEnd = 'api/usuarios/updatePasswordWeb';
                break;
            case 'addPunto':
                $urlEnd = 'api/puntoInteres';
                break;
            case 'registrarPersonal':
                $urlEnd = 'api/personal';
                break;
            case 'updatePunto':
                $urlEnd = 'api/puntoInteres/editPunto';
                break;
            case 'updateEstacion':
                $urlEnd = 'api/estacion/updateForm';
                break;

            default:
                break;
        }
        $url = $this->getUrl().$urlEnd;
        if ($option!='registrarPersonalOrden') {
            $request = json_encode($request->all());
        }
        $response = $this->client->post($url,['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN'), 'Content-type' => 'application/json'],'body' => $request]);
        $body = $response->getBody()->getContents();
        $datos = json_decode($response->getBody(), true);
        // dd($datos);
        return isset($datos) ? $datos : null;
    }

    public function apiPostFile($option,$request) {
        $this->validateSession($option);


        switch ($option) {
            case 'alertaNacional':
                $urlEnd = 'api/alertaNacional';
                break;

            default:
                break;
        }
        $url = $this->getUrl().$urlEnd;
        $response = $this->client->post($url,['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN'), 'Content-type' => 'application/json'],'body' => json_encode($this->createObject($request))]);
        // $body = $response->getBody()->getContents();
        $datos = json_decode($response->getBody(), true);

        return isset($datos) ? $datos : null;
    }


    public function ApiGetSearch($option,$param)
    {
        $this->validateSession($option);

        $url = $option;

        if(isset($param)){
            $url = 'search/'.$url.'?txt='.$param;
            $response = $this->client->get($this->getApiUrl($url),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        }else{
            $response = $this->client->get($this->getApiUrl($url,'?page=1'),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN')]]);
        }
        $datos = json_decode($response->getBody(), true);
        return isset($datos) ? $datos['data'] : null;
    }

    public function validateSession($option) {
        if(session('AUTH_TOKEN') == null || session('rol') == null){
            if($option!="enviarClaveTemporal"){
                $this->reloadSessionData();
            }
        }
    }
    public function createObject($request)
    {
        $temp = new stdClass();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $temp->file = $file->getClientOriginalName();
        }
        foreach ($request->except('file') as $name => $contents) {
            $temp->$name = $contents;
        }

        return $temp;
    }

    public function ApiPostData($option,$request)
    {
        // dd($request);
        $request = json_encode($request->all());
        $this->validateSession($option);
        $response = $this->client->post($this->getApiUrl($option),['headers' => [ 'Authorization' => 'Bearer ' . session('AUTH_TOKEN'), 'Content-type' => 'application/json'],'body' => $request]);
        $body = $response->getBody()->getContents();
        $datos = json_decode($response->getBody(), true);
        // dd($datos);
        return isset($datos) ? $datos : null;
    }
}

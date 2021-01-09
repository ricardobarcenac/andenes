<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
  protected $table = 'users';
  protected $allowedFields = ['id','nombres','apellidos','tipo_documento','numero_documento','telefono','ppe','perfil','correo_electronico','contrasena','fecha_registro','fecha_actualizacion','eliminacion_logica'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  protected function beforeInsert(array $data){
    $data = $this->passwordHash($data);
    return $data;
  }

  protected function beforeUpdate(array $data){
    $data = $this->passwordHash($data);
    return $data;
  }

  protected function passwordHash(array $data){
      if(isset($data['data']['contrasena']))
        $data['data']['contrasena'] = password_hash($data['data']['contrasena'], PASSWORD_DEFAULT);

      return $data;
  }
}

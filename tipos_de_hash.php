<?php
class hash_type{

    public function hash($usuario){


        //crypt
        $salt = "123";
        $usuario_crypt = crypt($usuario,$salt);

        //md5
        $usuario_md5 = md5($usuario);

        //sha1
        $usuario_sha1 = sha1($usuario);

        print "usuario => ".$usuario."\n";
        print "usuario com hash_crypt => ".$usuario_crypt."\n";
        print "=================================================\n";
        print "usuario => ".$usuario."\n";
        print "usuario com md5 => ".$usuario_md5."\n";
        print "===================================================\n";
        print "usuario => ".$usuario."\n";
        print "usuario com sha1 => ".$usuario_sha1."\n";
        
    }
}
$exibir_hash = new hash_type();
$exibir_hash->hash("jhon");

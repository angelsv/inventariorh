<?php
    require_once '../model/Ajustes_inventariosModel.php';

    class Ajustes_inventariosController{

        public function crearAjustes_inventarios($Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado){

            $model = new Ajustes_InventariosModel();

            $model->Insertar_Ajustes_Inventarios($Cantidad_Ajustada,
            $Motivo,
            $Fecha_Ajuste,
            $Responsable_Ajuste,
            $Comentarios,
            $Tipo_Ajuste,
            $Documento_Relacionado);

        }

    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
        
        $Cantidad_Ajustada = $_POST["Cantidad_Ajustada"];
        $Motivo = $_POST["Motivo"];
        $Fecha_Ajuste = $_POST["Fecha_Ajuste"];
        $Responsable_Ajuste = $_POST["Responsable_Ajuste"];
        $Comentarios = $_POST["Comentarios"];
        $Tipo_Ajuste = $_POST["Tipo_Ajuste"];
        $Documento_Relacionado = $_POST["Documento_Relacionado"];

        $controller = new Ajustes_inventariosController();

        $controller->crearAjustes_inventarios($Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado);
    }
?>
<?php 
$fecha = date("d-m-Y");
$condicion = 'Condiciones de entrega:';
$validez = '-Esta cotización tiene validez los próximos 30 días hábiles.';
$mensajeUno = '-Precio sujetos a cambio sin previo aviso.';
$mensajeDos = '-1 año de garantía.';
$mensajeTres = '-50% de anticipo y el resto al entregar.';
$mensajeCuatro = 'Si tiene alguna duda sobre este presupuesto no dude
en comunicarse con nosotros.'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cotización</title>

    <style type="text/css">
        * {
            font-family: "Segoe UI", Tahoma, sans-serif;
        }
        table {
            font-size: x-medium;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgray;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
    <table width="100%">
        <tr>
            <td valign="top"><img src="assets/img/teldyr_.png" style="width: 170px; height: 120px; margin-right:30px;" alt="teldyr"></td>
            <td align="right">
                <h1 style='color: #375CA6;'><?php echo 'Cotización'?></h1>
                <?php echo strftime("%d/%B/%Y")?>
                <pre>
                    <b>Contacto:</b>
                    "número_contacto"
                    "correo_contacto"
                    "página web de empresa"
                </pre>
            </td>
        </tr>
    </table>

    <!-- Informaión de la empresa -->
    <table width="100%">
        <thead style="background-color: #F2F2F2;">
            <tr>
                <th>Vendedor:</th>
                <td><?php echo sprintf('%s',$d->name); ?></td>
                <th>Fecha de solicitud:</th>
                <td><?php echo $fecha?></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <th>No. Cotización</th>
                <td><?php echo sprintf('%s',$d->noquote);?></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <th>Cliente: </th>
                <td><?php echo sprintf('%s',$d->company);?></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <th>Proyecto: </th>
                <td><?php echo sprintf('%s',$d->project);?></td>
            </tr>
        </thead>
    </table>
    <br/>
  

    <!-- Resumen de la  cotización -->
    <table width="100%">
        <thead style="background-color: #375CA6;">
            <tr>
                <th style="color: #f2f2f2;">#</th>
                <th style="color: #f2f2f2;">Descripción</th>
                <th style="color: #f2f2f2;">Marca</th>
                <th style="color: #f2f2f2;">Precio unitario</th>
                <th style="color: #f2f2f2;">Cantidad</th>
                <th style="color: #f2f2f2;">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($d -> items as $c):?> 
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $c->concept; ?></td>
                    <td align="center"><?php echo $c->brand; ?></td>
                    <td align="right">$<?php echo number_format($c->price, 2); ?> </td>
                    <td align="center"><?php echo $c->quantity; ?></td>
                    <td align="right" style="background-color: #c4d8f2;">$<?php echo number_format($c->total, 2); ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach?>
        </tbody>
        
        <tfoot>
            <tr>
                <td colspan="4"></td>
                <td align="right">Subtotal $</h3></td>
                <td align="right"><?php echo number_format($d->subtotal, 2); ?></td>
            </tr>
            <!-- Descuento
            <tr>
                <td colspan="5"></td>
                <td align="right"></h3></td>
                <td align="right"><?php echo '-'.number_format($d->shipping, 2); ?></td>
            </tr>
            -->
            <tr>
                <td colspan="4"></td>
                <td align="right">IVA $</h3></td>
                <td align="right"><?php echo number_format($d->taxes, 2); ?></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td align="right"><h2>Total $</h2></td>
                <td><h2 align="right" style="margin: 0px 0px;"><?php echo number_format($d->total, 2). ' MXN'; ?></h2></td>
            </tr>
            <tr>
                <td colspan="6" align="right"><?php echo sprintf('Impuestos del %s%% incluido (IVA).', TAXES_RATE);?></td>
            </tr>
        </tfoot>
    </table>
    <table>
        <tfoot>
            <tr>
                <td align="left"><i><?php echo $condicion ?></i></td>
            </tr>
            <tr>
                <td align="left"><i><?php echo $validez ?></i></td>
            </tr>
            <tr>
                <td align="left"><i><?php echo $mensajeUno ?></i></td>
            </tr>
            <tr>
                <td align="left"><i><?php echo $mensajeDos ?></i></td>
            </tr>
            <tr>
                <td align="left"><i><?php echo $mensajeTres ?></i></td>
            </tr>
            <tr>
                <td align="left"></i><?php echo $mensajeCuatro ?></i></td>
            </tr>
        </tfoot>
    </table>


</body>
</html>

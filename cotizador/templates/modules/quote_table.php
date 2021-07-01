<?php if(empty($d->items)): ?>
    <div class="text-center">
        <h2 style="color: #a60f2b;">Cotización vacía</h2>
        <img src="<?php echo IMG.'empty.png'; ?>" alt="Sin contentido" class="img-fluid" style="width: 150px;">
    </div>
    <?php else: ?>
    <h3 class="text-danger"><?php echo sprintf('Cotización #%s', $d->number) ?></h3>
    <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                    <th></th>
                    <th>Concepto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($d->items as $item): ?>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button style="background-color: #3B5CBF;" class="btn btn-sm btn-primary edit_concept" 
                                        data-id="<?php echo $item -> id; ?>">
                                         Editar
                                    </button>
                                    <button style="background-color: #A60F2B;" class="btn btn-sm btn-danger delete_concept" 
                                        data-id="<?php echo $item -> id; ?>">
                                         Borrar
                                    </button>
                                </div>
                            </td>
                            <td>
                                <?php echo $item-> concept; ?>
                                <small class="text-muted d-block">
                                    <img src="<?php echo IMG.($item->type === 'producto' ? 'product.png' : 'service.png'); ?>" alt="<?php echo $item->concept;?>" 
                                    style="width: 20px;">
                                    <?php echo $item -> type === 'producto' ? 'Producto' : 'Servicio';?>
                                </small>
                            </td>
                            <td class="text-center"><?php echo '$'.number_format($item->price, 2); ?></td>
                            <td class="text-center"><?php echo $item->brand; ?></td>  
                            <td class="text-center"><?php echo $item->quantity; ?></td>  
                            <td class="text-right"><?php echo '$'.number_format($item->total, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                    <td class="text-right" colspan="5">Subtotal</td>
                    <td class="text-right"><?php echo '$'.number_format($d->subtotal, 2);?></td>
                    </tr>
                    <tr>
                    <td class="text-right" colspan="5">IVA</td>
                    <td class="text-right"><?php echo '$'.number_format($d->taxes, 2);?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="6">
                            <h5><b style="color: #0D0D0D;">Total</b></h5><h3 style="color: #3B5CBF;" ><b><?php echo '$'.number_format($d->total, 2). ' MXN';?></b></h3>
                            <small class="text-muted"><?php echo sprintf('Impuestos incluidos %s%% IVA', TAXES_RATE);?></small>
                        </td>
                    </tr>
                </tbody>
                </table>
    </div>
<?php endif; ?>
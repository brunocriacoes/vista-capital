<?php

    echo "<style>";
    include __DIR__ . "/src/css/style-dev.css"; 
    echo "</style>";

    $t = getTabela('tabela-dev');
?>

<div>

    <span class="sos-title"> 
        <?= _t('Cotas e indexadores') ?> 
    </span>

    <span class="sos-data">
        <span class="sos-lang-pt">
            <?= _t( 'Data' ) ?> 
            <?= $t->info->data . '-' . date('y') ?> 

        </span>
    </span>

    <div class="table-responsive">

        <table width="100%" class="sos-table">
            <tbody>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= _t( 'Multimercado' ) ?> </td>
                    <td> <?= _t( 'Cota' ) ?> </td>
                    <td> <?= _t( 'Dia' ) ?> </td>
                    <td> <?= _t( 'Mês' ) ?> </td>
                    <td> <?= _t( 'Ano' ) ?> </td>
                    <td> <?= _t( '12 Meses' ) ?> </td>
                    <td> <?= _t( '24 Meses' ) ?> </td>
                    <td> <?= _t( '36 Meses' ) ?> </td>
                    <td> <?= _t( 'Início' ) ?>  </td>
                    <td> <?= _t( 'PL (R$)' ) ?>  </td>
                    <td> <?= _t( 'PL 12M (R$)' ) ?> </td>
                    <td> <?= _t( 'PL Estrategia' ) ?>  </td>
                </tr>
                <tr>
                    <td><?= _t( 'Vista Multiestrategia FIM' ) ?></td>
                    <?= linhaCorrida( $t->multiestrategia ) ?>
                </tr>
                <tr>
                    <td><?= _t( '%CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdiMultiestrategia ) ?>
                </tr>
                <tr>
                    <td><?= _t( 'Vista Hedge FIM' ) ?></td>
                    <?= linhaCorrida( $t->hedge ) ?>
                </tr>
                <tr>
                    <td><?= _t( '%CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdiHedge ) ?>
                </tr>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= _t( 'Renda Variável' ) ?> </td>
                    <td> <?= _t( 'Cota' ) ?> </td>
                    <td> <?= _t( 'Dia' ) ?> </td>
                    <td> <?= _t( 'Mês' ) ?></td>
                    <td> <?= _t( 'Ano' ) ?> </td>
                    <td> <?= _t( '12 Meses' ) ?> </td>
                    <td> <?= _t( '24 Meses' ) ?> </td>
                    <td> <?= _t( '36 Meses' ) ?> </td>
                    <td> <?= _t( 'Início' ) ?></td>
                    <td> <?= _t( 'PL (R$' ) ?> </td>
                    <td> <?= _t( 'PL 12M (R$)' ) ?> </td>
                    <td> <?= _t( 'PL Estrategia' ) ?> </td>
                </tr>
                <tr>
                    <td><?= _t( 'Vista FIA' ) ?></td>
                    <?= linhaCorrida( $t->fia ) ?>
                </tr>
                <tr>
                    <td><?= _t( 'Vista Long Biased FIC' ) ?></td>
                    <?= linhaCorrida( $t->longBiased ) ?>
                </tr>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= _t( 'Indexadores' ) ?> </td>
                    <td></td>
                    <td> <?= _t( 'Dia' ) ?> </td>
                    <td> <?= _t( 'Mês' ) ?> </td>
                    <td> <?= _t( 'Ano' ) ?> </td>
                    <td> <?= _t( '12 Meses' ) ?> </td>
                    <td> <?= _t( '24 Meses' ) ?> </td>
                    <td> <?= _t( '36 Meses' ) ?> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="sos-ibx">
                    <td><?= _t( 'IBX' ) ?></td>
                    <?= linhaCorrida( $t->ibx ) ?>
                </tr>
                <tr id="sos-cdi">
                    <td><?= _t( 'CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdi ) ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9"></td>
                    <td colspan="3">
                        <span class="sos-total">
                            <span class="sos-total-title"><?= _t( 'PL TOTAL (R$)' ) ?></span>
                            <span class="sos-total-valor"><?= $t->info->total ?? 'TOTAL' ?></span>
                        </span>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
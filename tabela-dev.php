<?php

    require __DIR__ . "/core/bootstrap.php";

    echo "<style>";
    include __DIR__ . "/src/css/style-dev.css"; 
    echo "</style>";

    $t = getTabela('tabela-dev');
?>

<div>

    <span class="sos-title"> 
        <?= translate('Cotas e indexadores') ?> 
    </span>

    <span class="sos-data">
        <span class="sos-lang-pt">
            <?= translate( 'Data' ) ?> 
            <?= $t->info->data . '-' . date('y') ?> 

        </span>
    </span>

    <div class="table-responsive">

        <table width="100%" class="sos-table">
            <tbody>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= translate( 'Multimercado' ) ?> </td>
                    <td> <?= translate( 'Cota' ) ?> </td>
                    <td> <?= translate( 'Dia' ) ?> </td>
                    <td> <?= translate( 'Mês' ) ?> </td>
                    <td> <?= translate( 'Ano' ) ?> </td>
                    <td> <?= translate( '12 Meses' ) ?> </td>
                    <td> <?= translate( '24 Meses' ) ?> </td>
                    <td> <?= translate( '36 Meses' ) ?> </td>
                    <td> <?= translate( 'Início' ) ?>  </td>
                    <td> <?= translate( 'PL (R$)' ) ?>  </td>
                    <td> <?= translate( 'PL 12M (R$)' ) ?> </td>
                    <td> <?= translate( 'PL Estrategia' ) ?>  </td>
                </tr>
                <tr>
                    <td><?= translate( 'Vista Multiestrategia FIM' ) ?></td>
                    <?= linhaCorrida( $t->multiestrategia ) ?>
                </tr>
                <tr>
                    <td><?= translate( '%CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdiMultiestrategia ) ?>
                </tr>
                <tr>
                    <td><?= translate( 'Vista Hedge FIM' ) ?></td>
                    <?= linhaCorrida( $t->hedge ) ?>
                </tr>
                <tr>
                    <td><?= translate( '%CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdiHedge ) ?>
                </tr>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= translate( 'Renda Variável' ) ?> </td>
                    <td> <?= translate( 'Cota' ) ?> </td>
                    <td> <?= translate( 'Dia' ) ?> </td>
                    <td> <?= translate( 'Mês' ) ?></td>
                    <td> <?= translate( 'Ano' ) ?> </td>
                    <td> <?= translate( '12 Meses' ) ?> </td>
                    <td> <?= translate( '24 Meses' ) ?> </td>
                    <td> <?= translate( '36 Meses' ) ?> </td>
                    <td> <?= translate( 'Início' ) ?></td>
                    <td> <?= translate( 'PL (R$' ) ?> </td>
                    <td> <?= translate( 'PL 12M (R$)' ) ?> </td>
                    <td> <?= translate( 'PL Estrategia' ) ?> </td>
                </tr>
                <tr>
                    <td><?= translate( 'Vista FIA' ) ?></td>
                    <?= linhaCorrida( $t->fia ) ?>
                </tr>
                <tr>
                    <td><?= translate( 'Vista Long Biased FIC' ) ?></td>
                    <?= linhaCorrida( $t->longBiased ) ?>
                </tr>
                <tr class="sos-tr-title">
                    <td class="sos-left"> <?= translate( 'Indexadores' ) ?> </td>
                    <td></td>
                    <td> <?= translate( 'Dia' ) ?> </td>
                    <td> <?= translate( 'Mês' ) ?> </td>
                    <td> <?= translate( 'Ano' ) ?> </td>
                    <td> <?= translate( '12 Meses' ) ?> </td>
                    <td> <?= translate( '24 Meses' ) ?> </td>
                    <td> <?= translate( '36 Meses' ) ?> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="sos-ibx">
                    <td><?= translate( 'IBX' ) ?></td>
                    <?= linhaCorrida( $t->ibx ) ?>
                </tr>
                <tr id="sos-cdi">
                    <td><?= translate( 'CDI' ) ?></td>
                    <?= linhaCorrida( $t->cdi ) ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9"></td>
                    <td colspan="3">
                        <span class="sos-total">
                            <span class="sos-total-title"><?= translate( 'PL TOTAL (R$)' ) ?></span>
                            <span class="sos-total-valor"><?= $t->info->total ?? 'TOTAL' ?></span>
                        </span>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
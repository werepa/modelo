<?php
/**
 * Gerador de Modelo de Laudo
 */

include_once('tbs_class.php');
include_once('./opentbs/tbs_plugin_opentbs.php');

$d = new stdClass();
$d->sigla_unidade_emissora = 'SETEC/SR/PF/GO';
$d->tipo_documento = 'Laudo';
$d->nome_unidade_emissora = 'Setor Técnico-Científico';
$d->nome_unidade_superior = 'Superintendência Regional de Polícia Federal em Goiás';
$d->nome_unidade_superior_sem_policia_federal = '';
$d->cargo_titular_unidade_emissora = 'Perito Criminal Federal';
$d->nome_titular_unidade_emissora = 'Henrique Mendonça Oliveira de Queiroz';
$d->tipo_procedimento = 'laudo pericial';
$d->sigla_orgao_procedimento = 'SR/PF/GO';
$d->funcao_solicitante_exame = 'Escrivão de Polícia Federal';
$d->nome_solicitante_exame = 'Fulano da Silva';
$d->tipo_documento_solicitacao_exame = 'Memorando';
$d->numero_documento_solicitacao_exame = '9999';
$d->ano_documento_solicitacao_exame = '2019';
$d->sigla_orgao_solicitacao_exame = 'DPF/JTI/GO';
$d->data_emissao_solicitacao_exame = '01/01/2019';
$d->cargo_signatario = 'Perito Criminal Federal';
$d->classe_signatario = 'Classe Especial';
$d->artigo_definido_unidade_superior = 'a';
$d->artigo_definido_titular_unidade_emissora = 'o';
$d->funcao_titular_unidade_emissora = 'Superintendente';
$d->artigo_definido_signatario = 'o';
$d->artigo_definido_tipo_procedimento = 'o';
$d->artigo_definido_solicitante_exame = 'o';
$d->artigo_definido_tipo_documento_solicitacao_exame = 'o';
$d->artigo_definido_unidade_emissora = 'a';
$d->numero_registro = '9999';
$d->ano_registro = '2019';
$d->sigla_unidade_registro = 'SR/PF/GO';
$d->data_registro = '01/01/2019';
$d->titulo_laudo = 'Exame em Veículo Terrestre';
$d->subtitulo_laudo = 'Automóvel';
$d->artigo_veiculo = '';
$d->numero_documento = '1234';
$d->ano_documento = '2019';
$d->dia_emissao = '10';
$d->mes_emissao = 'junho';
$d->nome_signatario = 'Weber Rener Paiva';
$d->matricula_signatario = '9780';
$d->numero_procedimento = '6548';

$merge_blocks = new stdClass();
$merge_blocks = array(
    array(
        'name' => 'caracteristica',
        'content' => 
        array(
            array('label'=> 'Marca/Modelo', 'texto'=>'Honda Fit'),
            array('label'=> 'Ano/Modelo', 'texto'=>'2006/2007'),
            array('label'=> 'Cor', 'texto'=>'dourada'),
            array('label'=> 'Demo', 'texto'=>'Bom pa karai!'),
            )    
        ),
    array(
        'name' => 'identificacao',
        'content' => 
        array(
            array('label'=> 'Chassi', 'texto'=>'4556HJ34534JK67' , 'obs'=>'Nenhum indício de adulteração'),
            array('label'=> 'Motor', 'texto'=>'2345678' , 'obs'=>'O terceiro algarismo da numeração está com tipagem diferente'),
            array('label'=> 'Placas', 'texto'=>'DYF-1587 (Goiânia-GO)' , 'obs'=>'Lacre íntegro'),
            array('label'=> 'RENAVAM', 'texto'=>'00917716671' , 'obs'=>''),            
            )        
        ),
    array(
        'name' => 'adicional',
        'content' => 
        array(
            array('label'=> 'Estado de conservação', 'texto' => 'Ruim'),
            array('label'=> 'Características gerais', 'texto'=>'vidros elétricos nas portas dianteiras e traseiras, película nos vidros: dianteiro esquerdo, dianteiro direito, traseiro esquerdo, traseiro direito, traseiro'),
            array('label'=> 'Avarias', 'texto' => 'Amassado na porta traseira direita'),
            array('label'=> 'Valor comercial', 'texto' => 'R$ 21.500,00 (vinte e um mil quinhentos reais), referente a um veículo semelhante em bom estado de conservação'),                    
            )        
        ),
    array(
        'name' => 'img_simples',
        'content' => 
        array(
            array('filename' => 'frente_1.png', 'legenda' => 'Vista frontal'),
            array('filename' => 'lateral_esquerda_1.png', 'legenda' => 'Vista Lateral Esquerda'),
            array('filename' => 'lateral_direita_1.png', 'legenda' => 'Vista Lateral Direita'),
            array('filename' => 'traseira_1.png', 'legenda' => 'Vista Traseira'),
            array('filename' => 'interior_1.png', 'legenda' => 'Interior do veículo'),
            )        
        ),
    array(
        'name' => 'img_dupla',
        'content' => 
        array(
            array('filename' => 'chassi_1.png', 'legenda' => 'numeração do chassis'),
            array('filename' => 'motor_1.png', 'legenda' => 'numeração do motor'),
            )        
        ),
    );

$v->veiculo_descricao = 'um veículo (passeio) Honda/Fit, placas JGV-6348, ano 2006/2007, cor dourada';
$v->adulteracao_resposta = 'Não foram encontrados sinais de adulteração de motor, chassi ou câmbio.';
$v->veiculo_avaliacao = 'R$ 21.500,00';
$v->veiculo_avaliacao_extenso = 'vinte e um mil quinhentos reais';
$v->veiculo_conservacao = 'ruim';
$v->local_adrede_resposta = 'Não foram encontrados...';
$v->outros_resposta = 'Nada a acrescentar.';
$v->tabela_adicional = true;

// ------------------------------------------------------------------------------------------------------------------

$img = new stdClass();

foreach($merge_blocks as $key => $item){    
    if($item['name']==='img_simples'){
        $lista = array();
        $linha_completa = false;
        $contador = 0;
        $aux = array('fig1' => array('filename' => '', 'legenda' => ''),'fig2' => array('filename' => 'no_image.jpg', 'legenda' => ''));
        foreach($item['content'] as $img){
            $contador++;
            if($contador % 2){
                $aux['fig1'] = $img;
                $linha_completa = false;
            } else {
                $aux['fig2'] = $img;
                $lista[] = $aux;
                $linha_completa = true;
                $aux = array('fig1' => array('filename' => '', 'legenda' => ''),'fig2' => array('filename' => 'no_image.jpg', 'legenda' => ''));
            }
        }
        if($contador > 0 && !$linha_completa){
            $lista[] = $aux;
        }
        $merge_blocks[$key] = array('name' => 'img_simples', 'content' => $lista);        
    };
}

// print_r($merge_blocks);

$TBS = new clsTinyButStrong;
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);

$TBS->LoadTemplate('Modelo laudo veiculo.odt',OPENTBS_ALREADY_UTF8);

foreach($merge_blocks as $item){
    $TBS->MergeBlock($item['name'], $item['content']);
}

$TBS->Show(OPENTBS_DOWNLOAD, 'laudo.odt');
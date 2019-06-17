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

$d->quesitos = array(
    array('numero' => '1', 'quesito' => 'Quais as características do veículo?', 'alias' => 'caracteristicas', 'resposta' => 'Trata-se de um [onshow.v.veiculo_descricao]. Detalhes apresentados na seção III e nas figuras do Apêndice A.'),
    array('numero' => '2', 'quesito' => 'O veículo submetido a exame possui sinais de adulteração do chassi, motor ou câmbio?', 'alias' => 'adulteração', 'resposta' => '[onshow.v.adulteracao_resposta]'),
    array('numero' => '3', 'quesito' => 'Qual o estado de conservação e o valor comercial do veículo?', 'alias' => 'conservação', 'resposta' => 'O veículo encontrava-se em estado de conservação [onshow.v.veiculo_conservacao] e, considerando as observações constantes na seção III, o veículo foi avaliado em aproximadamente [onshow.v.veiculo_avaliacao] ([onshow.v.veiculo_avaliacao_extenso]).'),
    array('numero' => '4', 'quesito' => 'O veículo possui algum compartimento adredemente preparado para o transporte de drogas e etc.?', 'alias' => 'local adrede', 'resposta' => '[onshow.v.local_adrede_resposta]'),
    array('numero' => '5', 'quesito' => 'Outros dados julgados úteis.', 'alias' => 'outros dados', 'resposta' => '[onshow.v.outros_resposta]'),
);

$v = new stdClass();
$v->caracteristicas = array(
    array('label'=> 'Marca/Modelo', 'texto'=>'Honda Fit'),
    array('label'=> 'Ano/Modelo', 'texto'=>'2006/2007'),
    array('label'=> 'Cor', 'texto'=>'dourada'),
    array('label'=> 'Demo', 'texto'=>'Bom pa karai!'),
); 

$v->identificacao = array(
    array('label'=> 'Chassi', 'texto'=>'4556HJ34534JK67' , 'obs'=>'Nenhum indício de adulteração'),
    array('label'=> 'Motor', 'texto'=>'2345678' , 'obs'=>'O terceiro algarismo da numeração está com tipagem diferente'),
    array('label'=> 'Placas', 'texto'=>'DYF-1587 (Goiânia-GO)' , 'obs'=>'Lacre íntegro'),
    array('label'=> 'RENAVAM', 'texto'=>'00917716671' , 'obs'=>''),
); 

$v->adicional = array(
    array('label'=> 'Estado de conservação', 'texto' => 'Ruim'),
    array('label'=> 'Características gerais', 'texto'=>'vidros elétricos nas portas dianteiras e traseiras, película nos vidros: dianteiro esquerdo, dianteiro direito, traseiro esquerdo, traseiro direito, traseiro'),
    array('label'=> 'Avarias', 'texto' => 'Amassado na porta traseira direita'),
    array('label'=> 'Valor comercial', 'texto' => 'R$ 21.500,00 (vinte e um mil quinhentos reais), referente a um veículo semelhante em bom estado de conservação'),
); 


$v->veiculo_descricao = 'um veículo (passeio) Honda/Fit, placas JGV-6348, ano 2006/2007, cor dourada';
$v->adulteracao_resposta = 'Não foram encontrados sinais de adulteração de motor, chassi ou câmbio.';
$v->veiculo_avaliacao = 'R$ 21.500,00';
$v->veiculo_avaliacao_extenso = 'vinte e um mil quinhentos reais';
$v->veiculo_conservacao = 'ruim';

$v->imagens = array(
    array('fig1' => array('filename' => 'frente_1.png'), 'fig2' => array('filename' => 'lateral_esquerda_1.png')),
    array('fig1' => array('filename' => 'lateral_direita_1.png'), 'fig2' => array('filename' => 'traseira_1.png')),
    array('fig1' => array('filename' => 'interior_1.png'), 'fig2' => array('filename' => 'interior_2.png')),
    array('fig1' => array('filename' => 'chassi_1.png'), 'fig2' => array('filename' => 'motor_1.png')),
);
              
$v->dupla = array(
    array('filename' => 'chassi_1.png'),
);
              
$TBS = new clsTinyButStrong;
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);

$TBS->LoadTemplate('Modelo laudo veiculo.odt',OPENTBS_ALREADY_UTF8);

$TBS->MergeBlock('quesitos', $d->quesitos); // quesitos

$TBS->MergeBlock('caracteristica', $v->caracteristicas); // características do veículo
$TBS->MergeBlock('identificacao', $v->identificacao); // identificacao do veículo
$TBS->MergeBlock('adicional', $v->adicional); // informações adicionais do veículo

$TBS->MergeBlock('img', $v->imagens); // imagens do veículo
$TBS->MergeBlock('img2', $v->dupla); // imagens do veículo

$TBS->Show(OPENTBS_DOWNLOAD, 'laudo.odt');


// const dataLaudo = new Date(exame.data_exame);

// laudoForm['numero_documento'] = exame.numero;
// laudoForm['dia_emissao'] = dataLaudo.getDay();
// laudoForm['mes_emissao'] = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'][dataLaudo.getMonth() - 1];
// laudoForm['ano_documento'] = dataLaudo.getFullYear();
// laudoForm['nome_signatario'] = exame.responsavel.nome;
// laudoForm['matricula_signatario'] = exame.responsavel.id;
// laudoForm['numero_procedimento'] = exame.exame.memorando_numero;

// laudoForm['veiculoTipo'] = laudoForm.tipo;
// delete laudoForm['tipo'];

// laudoForm['veiculoEspecie'] = laudoForm.especie;
// delete laudoForm['especie'];

// laudoForm['veiculoObs'] = laudoForm.obs;
// delete laudoForm['obs'];

// console.log('laudoForm.conservacao', laudoForm.conservacao);
// laudoForm['veiculoConservacao'] = laudoForm.conservacao;
// delete laudoForm['conservacao'];

// ['identificacao', 'caracteristicas', 'equipamentosObrigatorios'].map(item => {
//     const keys = Object.keys(laudoForm[item]);
//     keys.map(key => {
//         laudoForm[key] = laudoForm[item][key];
//     });
//     delete laudoForm[item];
// });
// ['pneuDE', 'pneuDD', 'pneuTE', 'pneuTD', 'pneuEstepe'].map(item => {
//     if (laudoForm[item].presente) {
//         laudoForm[item] = `Roda de ${laudoForm[item].tipoRoda.toLowerCase()} com pneu aro ${laudoForm[item].medidas.aro}", largura: ${laudoForm[item].medidas.largura}mm e altura: ${laudoForm[item].medidas.altura}mm (${laudoForm[item].medidas.largura}/${laudoForm[item].medidas.altura}R${laudoForm[item].medidas.aro}), conservação: ${laudoForm[item].conservacao}`;
//     } else {
//         laudoForm[item] = 'Ausente.';
//     }
// });
// if (!laudoForm['vidrosPelicula'] || !laudoForm['vidrosPelicula'].length) {
//     laudoForm['vidrosPelicula'] = 'Vidros sem película.'
// } else {
//     if (laudoForm['vidrosPelicula'].length === 1) {
//         laudoForm['vidrosPelicula'] = 'Possui película no vidro ' + laudoForm['vidrosPelicula'][0];
//     } else {
//         laudoForm['vidrosPelicula'] = 'Possui película nos vidros: ' + laudoForm['vidrosPelicula'].join(', ');
//     }
// }

// let veiculoCaracteristicas = [];
// if (laudoForm.vidros) veiculoCaracteristicas.push(`Vidros ${laudoForm.vidros.toLowerCase()} (${laudoForm.vidrosPelicula.toLowerCase()})`);
// if (laudoForm.retrovisorEsquerdo) veiculoCaracteristicas.push(`Retrovisor esquerdo: ${laudoForm.retrovisorEsquerdo} / Retrovisor direito: ${laudoForm.retrovisorDireito}`);
// if (laudoForm.travasEletricas) veiculoCaracteristicas.push(`Possui travas elétricas`);
// let som;
// if (laudoForm.aparelhoSom) {
//     som = 'Possui aparelho de som';
//     if (laudoForm.aparelhoSomDescricao) som = som + ` (${laudoForm.aparelhoSomDescricao})`;
// } else {
//     som = 'Não possui aparelho de som';
// }
// veiculoCaracteristicas.push(som);
// if (laudoForm.antena) veiculoCaracteristicas.push(`antena: ${laudoForm.antena}`);
// if (laudoForm.airBag) veiculoCaracteristicas.push(`Possui airbag`);
// if (laudoForm.cambioAutomatico) {
//     veiculoCaracteristicas.push(`Câmbio automático`);
// } else {
//     veiculoCaracteristicas.push(`Câmbio manual`);
// }
// if (laudoForm.estribosLaterais) veiculoCaracteristicas.push(`Possui estribos laterais`);
// if (laudoForm.santoAntonio) veiculoCaracteristicas.push(`Possui santo antonio`);
// if (laudoForm.protetorCacamba) veiculoCaracteristicas.push(`Possui protetor de caçamba`);
// if (laudoForm.capotaMaritima) veiculoCaracteristicas.push(`Possui capota marítima`);
// if (laudoForm.extintor) veiculoCaracteristicas.push(`Possui extintor`);
// if (laudoForm.macaco) veiculoCaracteristicas.push(`Possui macaco`);
// if (laudoForm.chaveRodas) veiculoCaracteristicas.push(`Possui chave de rodas`);
// if (laudoForm.triangulo) veiculoCaracteristicas.push(`Possui triangulo`);

// laudoForm['veiculoCaracteristicas'] = veiculoCaracteristicas.join('; ');
// laudoForm['veiculoCaracteristicas'] += '.';

// if (laudoForm.lacreIntegro === 'Sim') {
//     laudoForm.lacreIntegro = 'lacre íntegro'
// } else {
//     laudoForm.lacreIntegro = 'lacre rompido'
// }

// if (laudoForm.localAdrede === 'Sim') {
//     laudoForm['localAdredeResposta'] = `Constatou-se a presença de local preparado para o transporte de objetos e/ou drogas, ${laudoForm.localAdredeDescricao}, apresentando as seguintes dimensões aproximadas (cm): ${laudoForm.localAdredeDimensoes}, totalizando uma capacidade de volume de ${laudoForm.localAdredeVolume} cm³.`
// } else {
//     laudoForm['localAdredeResposta'] = 'Não foram localizadas modificações estruturais que pudessem ser configuradas como local adrede preparado para transporte de objetos. Porém, um veículo apresenta inúmeras possibilidades para se transportar de forma dissimulada de mercadorias e/ou substâncias, seja através de compartimentos existentes na própria estrutura do veículo, seja através da adaptação de componentes, como os interiores dos para-lamas, das forrações, do assoalho e do tanque de combustível, sendo que algumas peças e estruturas podem ser examinadas apenas por meio de sua destruição e/ou a partir de ferramentas e mão-de-obra especializada.'
// }

// if (laudoForm.chassiAdulteracao === 'Sim') {
//     laudoForm['chassiAdulteracaoTabela'] = '* Indícios de adulteração';
// } else {
//     laudoForm['chassiAdulteracaoTabela'] = '';
// }

// if (laudoForm.motorAdulteracao === 'Sim') {
//     laudoForm['motorAdulteracaoTabela'] = '* Indícios de adulteração';
// } else {
//     laudoForm['motorAdulteracaoTabela'] = '';
// }

// if (laudoForm.cambioAdulteracao === 'Sim') {
//     laudoForm['cambioAdulteracaoTabela'] = '* Indícios de adulteração';
// } else {
//     laudoForm['cambioAdulteracaoTabela'] = '';
// }

// if (laudoForm.chassiAdulteracao === 'Sim' || laudoForm.motorAdulteracao === 'Sim' || laudoForm.cambioAdulteracao === 'Sim') {
//     let resposta = '';
//     if (laudoForm.chassiAdulteracao === 'Sim') {
//         resposta = `Foram encontrados indícios de adulteração na numeração do chassis, ${laudoForm.chassiAdulteracaoDescricao}`;
//     }
//     if (laudoForm.motorAdulteracao === 'Sim') {
//         resposta = `${resposta}\nForam encontrados indícios de adulteração na numeração do motor, ${laudoForm.motorAdulteracaoDescricao}`;
//     }
//     if (laudoForm.cambioAdulteracao === 'Sim') {
//         resposta = `${resposta}\nForam encontrados indícios de adulteração na numeração do câmbio, ${laudoForm.cambioAdulteracaoDescricao}`;
//     }
//     laudoForm['adulteracaoResposta'] = resposta;
// } else {
//     laudoForm['adulteracaoResposta'] = 'As numerações/codificações verificadas no veículo examinado não apresentavam vestígios visíveis de adulteração. Maiores detalhes na seção III e nas imagens constantes no Apêndice A.'
// }

// console.log('laudoForm.avaliacao', laudoForm.avaliacao)
// if (laudoForm.avaliacao) {
//     laudoForm['veiculoAvaliacao'] = laudoForm.avaliacao.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
//     laudoForm['veiculoAvaliacaoExtenso'] = numero.porExtenso(+laudoForm.avaliacao, numero.estilo.monetario);
//     console.log('veiculoAvaliacao', laudoForm['veiculoAvaliacao'])
//     console.log('veiculoAvaliacaoExtenso', laudoForm['veiculoAvaliacaoExtenso'])
// }

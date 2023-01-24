<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Configuration;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Admin;
use Carbon\Carbon;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'Nossa História',
                'content' => '<div class="col">
             <!-- conteudo -->
             <div class="row">
                 <div class="col-lg-12 less-spaced">
                     <h1 class="hist"><img src="images/slice-logo.png">Nossa Historia</h1>
                     <p class="texthist">A <B>ASCONT ASSESORIA E CONTABILIDADE</B> foi fundada no ano de 2018. Nosso escritorio
                         </br>conta com uma equipe treinada e atualizada para melhor atender as necessidades de</br> nossos
                         clientes.</p>
                     </p>
                     <p class="texthist">Atualmente a <B>ASCONT</B> vem sendo referencia no mercado, devido seu atendimento</br>
                         diferenciado e humanizado, com agilidade, alem da eficiencia no trabalho prestado.</p>
                     <h1 class="hist"><img src="images/slice-logo.png">Nossos Valores</h1>
                     <p class="texthist">Respeito, etica, integridade e comprometimento sao os nossos pilares e valores
                         que</br>prezamos. </p>
                     <h1 class="hist"><img src="images/slice-logo.png">Nossa Missao</h1>
                     <p class="texthist">Prestar uma assessoria e contabilidade de forma eficiente, alem apresentar de forma rapida</br>
                         e segura as atualizacoes da economia do nosso Pais para que nossos clientes realize</br> tomada de
                         decisao de forma assertiva,visando sempre lucros e ascensao da sua</br> empresa. </p>
         
                 </div>
             </div>
         
         </div>
         <script type="text/javascript">
    $(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});

	$(document).ready(function(){
		$(".menu-toggle").click(function(){
		$(".menu-mobile").toggle();
		});
	});
</script>',
                'description' => 'Página sobre Nossa História', 'url' => 'nossa-historia', 'created_at' => Carbon::now()
            ],
            [
                'title' => 'Serviços Prestados',
                'content' => '<div class="col">
                <!-- conteudo -->
                <div class="row servicos">
                    <h1 class="servicos mb-4">Nossos Serviços Prestados</h1>
                    <div class="col-lg-12">
            
                        <div class="col-lg-12">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                CONTABILIDADE EMPRESARIAL
                                            </button>
                                        </h2>
                                    </div>
            
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Contabilidade Empresarial fornecida pela <b>ASCONT – Assessoria e Contabilidade</b>, é
                                            composta por rotinas mensais de Departamento Pessoal, Escrita Fiscal e Contabilidade. Na
                                            parte de Departamento Pessoal está inclusos todas as obrigações com o E-Social,
                                            admissão, folha de pagamento, 13º salário, Férias e Rescisão Contratual. Já na parte de
                                            Escrita Fiscal, está incluso todas as declarações pertinentes ao enquadramento da
                                            empresa, assim como, a apuração dos impostos devidos nos âmbitos, municipais, estaduais
                                            e federais. Relacionado a parte da Contabilidade, nosso escritório pratica as
                                            declarações obrigatórias do enquadramento da empresa, nos seus prazos mensais e anuais,
                                            assim como os lançamentos contábeis para a apuração do Balanço e DRE.
                                        </div>
                                    </div>
                                </div>
            
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
            
                                                CONTABILIDADE RURAL
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Contabilidade Rural fornecida pela <b>ASCONT – Assessoria e Contabilidade</b>, é composta por
                                            Escrituração de Livro Caixa, Apuração de Imposto, Declarações mensais e anuais. Para os
                                            clientes Mensalistas. Também realizamos apenas o trabalho de fazer a sua Declaração de
                                            ITR – Imposto de Territorial Rural obrigatória anualmente.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed " type="button">
            
                                                ABERTURA DE MATRÍCULA CEI / CND – OBRA
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            O trabalho de Abertura de Matrícula CEI/CND – OBRA, fornecido pela ASCONT – Assessoria e
                                            Contabilidade, é composta pela Abertura da CNO – Cadastro Nacional de Obras, Abertura da
                                            CEI – Cadastro Específico do INSS, Declaração da DISO – Declaração de Informações Sobre
                                            Obras, além de orientação relacionada aos impostos, para sua Obra possa ser declarada e
                                            que haja o recolhimento de todos os impostos devidos já aproveitados dos créditos sobre
                                            as notas fiscais no decorrer da obra. Por fim, a emissão da CND – Certidão Nacional de
                                            Débitos.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed " type="button">
                                                ABERTURA / ALTERAÇÕES / REGULARIZAÇÕES / BAIXA DE EMPESAS
            
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A <b>ASCONT – Assessoria e Contabilidade</b>, realiza tanto para seus clientes mensalistas,
                                            quanto para os clientes que nos escolhem apenas para esse serviço. A Abertura /
                                            Alteração / Regularização ou Baixa das Empresas, nosso trabalho é executamos todos os
                                            serviços para nos órgãos competentes, sendo eles Junta Comercial ou Cartório de Registro
                                            de Pessoas Jurídicas, Receita Federal, Secretaria da Fazenda, Prefeitura Municipal da
                                            Cidade da Empresa, Vigilância Sanitária, CETESB, Conselhos de Classe, dentre outros.
                                            Além de indicarmos excelentes profissionais e/ou orientarmos quanto aos laudos de
                                            Bombeiro e Acessibilidade.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed " type="button">
            
                                                PLANEJAMENTO TRIBUTÁRIO
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            O Planejamento Tributário da sua empresa é algo tão importante quanto a própria
                                            contabilidade e a <b>ASCONT – Assessoria e Contabilidade</b> assessora da melhor forma que
                                            nosso cliente pode ter para das melhores opções tributárias, compreender e optar pelos
                                            melhores cálculo de juros sobre o capital próprio, Lucro Real, Lucro Presumido, Simples,
                                            Holdings Imobiliárias, etc.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false"
                                            aria-controls="collapsesix">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                CONTABILIDADE DE PARTIDOS POLITICOS
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Contabilidade de Partidos Políticos é muito importante tanto nos períodos de Campanha
                                            Política, quanto posterior a ela. A <b>ASCONT – Assessoria e Contabilidade</b>, presta este
                                            serviço para os Candidatos em isolado ou ao Partido Político, nosso trabalho é composto
                                            por, Assessoria Financeira aos Partidos ou Candidatos, Elaboração de Balanço e Balancete
                                            de Identificação, Prestação de Contas ao TSE – Tribunal Superior Eleitoral, ao TRE –
                                            Tribunal Regional Eleitora e ao Cartório Eleitoral, também está incluso as declarações
                                            ao SPCE – Sistema de Prestação de Contas Eleitorais e ao SPCA – Sistema de Prestação de
                                            Contas Anuais, rotinas de Departamento Pessoal, no que diz respeito aos registros de
                                            funcionários, orientações aos Recibos de Pagamentos Autônomos, e
                                            desenvolvendo de geração de folhas de pagamentos, 13º salário, Férias e Rescisões
                                            Contratuais, no ano vigente da Eleição ou continuamente.
            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingseven">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false"
                                            aria-controls="collapseseven">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                CONTABILIDADE DE PROFISSIONAIS AUTÔNOMOS
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Contabilidade de Profissionais Autônomos fornecida pela ASCONT – Assessoria e
                                            Contabilidade, é composta pelo Cadastramento desse profissional no Município de sua
                                            localidade, administração dos prazos e apuração dos impostos devidos no âmbito
                                            municipal, estadual e Federal (IRRF e GPS) e orientação quanto a emissão de Notas
                                            Fiscais ou Recibos Profissionais.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeight">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false"
                                            aria-controls="collapseeight">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                ASSESSORIA CONTÁBIL PARA EMPRESAS MEI
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeight" class="collapse" aria-labelledby="headingeight"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            É necessário lembrar que as Empresas MEIs, não está obrigada a realizar a Contabilidade,
                                            porém nós da <b>ASCONT – Assessoria e Contabilidade</b>, prestamos além do serviço de
                                            Contabilidade para os Clientes que desejam, a Orientação e Assessoria Contábil, que
                                            tange em explicar a tributação do MEI, orientar quanto ao desenquadramento, realizar
                                            todas as rotinas de departamento pessoal para o seu funcionário, orientamos na emissão
                                            de nota fiscal e o imposto DAS, além de assessorar quanto a necessidade de auxilio
                                            doença, licença maternidade e aposentadoria.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingnine">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false"
                                            aria-controls="collapsenine">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                FOLHA DE PAGAMENTO – EMPREGADA DOMÉSTICA
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsenine" class="collapse" aria-labelledby="headingnine"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Folha de Pagamento Doméstico é um dos serviços prestados pela ASCONT – Assessoria e
                                            Contabilidade, ele é composto exclusivamente pela administração do E-Social Doméstico,
                                            no que diz respeito à admissão, emissão de folha de pagamento, férias, 13º Salário e
                                            Rescisões do funcionário Doméstico. Orientamos também quanto aos atestados médicos e
                                            afastamentos pelo INSS.
            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleven">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false"
                                            aria-controls="collapseeleven">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                DECLARAÇÃO DE IMPOSTO DE RENDA – PESSOA FISICA
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A Declaração de Imposto de Renda é uma das mais importantes Declarações que a Pessoa
                                            Física precisa realizar. A <b>ASCONT – Assessoria e Contabilidade</b>, tem profissionais
                                            altamente qualificados para melhor te orientar nos mais variados assuntos da sua
                                            Declaração. Nosso trabalho, além de orientar e realizar sua Declaração, é também
                                            acompanhar toda a trajetória dela, desde a apuração do Imposto devido, a informação se
                                            já houve sua restituição ou acompanhar o processamento da mesma. Caso sua Declaração
                                            entre Malha Fiscal, nós orientamos quanto as apresentações de documentos necessários
                                            para esclarecer a dúvida do Fisco.
            
            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingten">
                                        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseten" aria-expanded="false"
                                            aria-controls="collapseten">
                                            <span><i class="fa fa-caret-right"></i></span>
                                            <button class="btn btn-link collapsed" type="button">
                                                ASSESSORIA E CONSULTORIA
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseten" class="collapse" aria-labelledby="headingten"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            A <b>ASCONT – Assessoria e Contabilidade</b>, presta à você interessado o trabalho Isolado de
                                            Assessoria que é um Auxílio técnico dentro de nossa área de conhecimentos
                                            especializados, principalmente em questões contábeis, fiscais (pessoa física e
                                            jurídica), para atendimento das necessidades da administração da empresa e cumprimento
                                            das normas legais.
                                            Além de Consultoria que é o estudo, opinião e instruções técnicas acerca de assuntos de
                                            nossa especialidade, principalmente em procedimentos contábeis, comerciais e fiscais
                                            (pessoa física e jurídica), reabertura e gestão de negócios, administração de pessoal e
                                            questões trabalhistas, atividades específicas (rurais, condomínios, empregos domésticos,
                                            aluguéis, etc.) pessoa física (declaração de imposto de renda, ganho de capital,
                                            cálculos diversos, etc.).
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>',
                'description' => 'Página', 'url' => 'servicos', 'created_at' => Carbon::now()
            ],
            [
                'title' => 'Serviços Online',
                'content' => '<div class="col">
            <!-- conteudo -->
            <div class="row servicos">
                <h1 class="servicos mb-4">Nossos Serviços</h1>
                <div class="col-lg-12">
        
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h2 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                  <span><i class="fa fa-caret-right"></i></span>
                                <button class="btn btn-link collapsed"  type="button">
                                  Abertura e regularizacao de empresas
                                </button>
                              </h2>
                            </div>
        
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                              </div>
                            </div>
                        </div>
                        
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h2 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <span><i class="fa fa-caret-right"></i></span>
                                <button class="btn btn-link collapsed" type="button">
                                    
                                  Abertura e regularizacao de empresas
                                </button>
                              </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <span><i class="fa fa-caret-right"></i></span>
                                <button class="btn btn-link collapsed " type="button">
                                    
                                  Abertura e regularizacao de empresas
                                </button>
                              </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingfour">
                              <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                  <span><i class="fa fa-caret-right"></i></span>
                                <button class="btn btn-link collapsed " type="button" >
                                  Abertura e regularizacao de empresas
                                </button>
                              </h2>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                  </div>
                            </div>
                          </div>
                        <div class="card">
                            <div class="card-header" id="headingfive">
                              <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                  <span><i class="fa fa-caret-right"></i></span>
                                <button class="btn btn-link collapsed " type="button" >
                                    
                                  Abertura e regularizacao de empresas
                                </button>
                              </h2>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                  </div>
                            </div>
                         </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                  <h2 class="mb-0" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                      <span><i class="fa fa-caret-right"></i></span>
                                    <button class="btn btn-link collapsed" type="button" >
                                      Abertura e regularizacao de empresas
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                      <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                      </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>	
            
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
  		$(".depoiments").owlCarousel({
  			loop:true,
  			items:1,
  			nav:true,
  			navText: ["<i class="fa fa-angle-left"></i>","<i class="fa fa-angle-right"></i>"],
  			dots:false
  			
  		});
  		$(".slider-news").owlCarousel({
  			loop:true,
  			items:1,
  			nav:false,
  			dots:true
  		});

  	$(".menu-toggle").click(function(){
    $(".menu-mobile").toggle();
});
	});', 'description' => 'Página', 'url' => 'servicos-online', 'created_at' => Carbon::now()
            ],
        //     ['title' => 'Tabelas Auxiliares',
        //     'content'=> 'Em Desenvolvimento...','description' => 'Página', 'url' => 'tabelas-auxiliares','created_at' => Carbon::now()],
        //     ['title' => 'Links Úteis',
        //     'content' => 'Em desenvolvimento...',
        //     'description' => 'Página', 'url' => 'links-uteis','created_at' => Carbon::now()],
        //     ['title' => 'Nossos Parceiros',
        //     'content' =>'<div class="col">
        //     <!-- conteudo -->
        //     <div class="row parc-princ">
        //         <div class="col-lg-12">
        //             <h1 class="parceiros">Parcerias de Sucesso!</h1>
        //             <div class="row p-area">
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" src="http://ascont.net.br/beta/images/samuel-sonia.png">
        //                     <h2 class="parceirot">Samuel Sakamoto</h2>
        //                     <h1 class="parceirotb">Advogado</h1>
        //                     <a class="btn btn-primary  contato-parc" href="#">Ver contato</a>
        //                 </div>
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" height="69.9px" src="http://ascont.net.br/beta/images/armitage.png">
        //                     <h2 class="parceirot">Armitage Web</h2>
        //                     <h1 class="parceirotb">Code House</h1>
        //                     <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
        //                 </div>
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" src="http://ascont.net.br/beta/images/juliana-arq.png">
        //                     <h2 class="parceirot">Juliana Cavalheiro</h2>
        //                     <h1 class="parceirotb">Arquitetura</h1>
        //                     <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
        //                 </div>
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" src="http://ascont.net.br/beta/images/samuel-sonia.png">
        //                     <h2 class="parceirot">Samuel Sakamoto</h2>
        //                     <h1 class="parceirotb">Advogado</h1>
        //                     <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
        //                 </div>
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" height="69.9px" src="http://ascont.net.br/beta/images/armitage.png">
        //                     <h2 class="parceirot">Armitage Web</h2>
        //                     <h1 class="parceirotb">Code House</h1>
        //                     <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
        //                 </div>
        //                 <div class="col-6 col-lg-4 mb-2 ">
        //                     <img class="imagep" src="http://ascont.net.br/beta/images/juliana-arq.png">
        //                     <h2 class="parceirot">Juliana Cavalheiro</h2>
        //                     <h1 class="parceirotb">Arquitetura</h1>
        //                     <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        
        // </div>','description' => 'Página', 'url' => 'parceiros','created_at' => Carbon::now()],
            ['title' => 'Tabelas Auxiliares',
            'content'=> '<div class="col">
            <div class="row d-flex">
                <h1 class="parceiros m-auto">Tabelas Auxiliares</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="tabela-header" colspan="3">
                                    Tabela do Imposto de Renda
                                </td>
                            </tr>
                            <tr  class="tabela-subheader">
                                <td>Renda em R$</td>
                                <td> Alíquota (%)</td>
                                <td>Parcela a deduzir - R$</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Até 1903,98</td>
                                <td>Isento</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>De 1.903,99 até 2.286,65</td>
                                <td>7,5</td>
                                <td>142,8</td>
                            </tr>
                            <tr>
                                <td>De 2.286,66 até 3.751,05</td>
                                <td>15</td>
                                <td>354,8</td>
                            </tr>
                            <tr>
                                <td>De R$ 3751,06 até R$ 4.664,68</td>
                                <td>22,5</td>
                                <td>636,13</td>
                            </tr>
                            <tr>
                                <td>Acima de R$ 4.664,68</td>
                                <td>27,5</td>
                                <td>869,36</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Dedução por dependente de R$ 189,59 (cento e oitenta e nove reais e cinquenta e nove
                                    centavos), para o ano-calendário de 2015
                                    (aplicável a partir de 01.04.2015)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="tabela-header" colspan="2">
                                    Unidade Fiscal Municipal
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>UFM</td>
                                <td><strong>R$ 3,8248 Ano 2020</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="tabela-header"  colspan="3">
                                    Tabela Mensal Contribuição Previdenciária
                                </td>
                            </tr>
                            <tr  class="tabela-subheader">
                                <td colspan="3">
                                    De 01.03.2020 a 31.12.2020
                                </td>
                            </tr>
                            <tr>
                                <td>Salário de Contribuição</td>
                                <td> Alíquota (%)</td>
                                <td>Parcela a deduzir - R$</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Até R$ 1.045,00;</td>
                                <td>7,50%</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>De R$ 1.045,01 até R$ 2.089,60</td>
                                <td>9%</td>
                                <td>15,67</td>
                            </tr>
                            <tr>
                                <td>De R$ 2.089,61 até R$ 3.134,40</td>
                                <td>12%</td>
                                <td>78,36</td>
                            </tr>
                            <tr>
                                <td>De R$ 3.134,41 até R$ 6.101,06</td>
                                <td>14%</td>
                                <td>141,05</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    O valor do salário-família será de R$ 48,62 por filho de até 14 anos incompletos ou inválido, para quem ganhar até R$ 1.425,56. 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="tabela-header" colspan="2">
                                    Unidade Fiscal de São Paulo
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>UFESP</td>
                                <td><strong>R$ 27,61 Ano 2020</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <td class="tabela-header" colspan="9">
                                    Outros Indicadores
                                </td>
                            </tr>
                            <tr class="tabela-subheader">
                                <td>
                                
                                </td>
                                <td>
                                mai/19
                                </td>
                                <td>
                                jun/19
                                </td>
                                <td>
                                jul/19
                                </td>
                                <td>
                                ago/19
                                </td>
                                <td>
                                set/19
                                </td>
                                <td>
                                out/19
                                </td>
                                <td>
                                nov/19
                                </td>
                                <td>
                                dez/19
                                </td>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td> <strong>IGP-M (FGV)</strong></td>
                                <td>0,45%</td>
                                <td>0,80%</td>
                                <td>0,40%</td>
                                <td>-0,67%</td>
                                <td>-0,01%</td>
                                <td>0,68%</td>
                                <td>0,30%</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>SELIC</strong></td>
                                <td>0,54%</td>
                                <td>0,47%</td>
                                <td>0,57%</td>
                                <td>0,50%</td>
                                <td>0,46%</td>
                                <td>0,48%</td>
                                <td>0,38%</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>TJLP</strong></td>
                                <td>0,52%</td>
                                <td>0,52%</td>
                                <td>0,50%</td>
                                <td>0,50%</td>
                                <td>0,50%</td>
                                <td>0,46%</td>
                                <td>0,46%</td>
                                <td>0,46%</td>
                            </tr>
                            <tr>
                                <td><strong>TR</strong></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <col class="md-12">
                <table class="table table-bordered">
                    <tr class="tabela-header">
                        <td>Simples Nacional</td>
                    </tr>
                    <tr>
                        <td> <strong> Clique sobre o título da tabela para visualizá-la: </strong></td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-1" class="font-weight-bolder text-ascont">Anexo I – Partilha do Simples Nacional - Comércio
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-1-remove" class="font-weight-bolder text-ascont">Anexo I – Partilha do Simples Nacional - Comércio
                        </td>
                    </tr>
                </table>
                <table id="table-1" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Receita Bruta em 12 meses (em R$)</td>
                            <td>Alíquota Nominal</td>
                            <td>Valor a deduzir (em R$)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Até 180.000,00</td>
                            <td>4%</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>De 180.000,01 a 360.000,00</td>
                            <td>7,3%</td>
                            <td>R$ 5.940,00</td>
                        </tr>
                        <tr>
                            <td>De 360.000,01 a 720.000,00</td>
                            <td>9,5%</td>
                            <td>R$ 13.860,00</td>
                        </tr>
                        <tr>
                            <td>De 720.000,01 a 1.800.000,00</td>
                            <td>10,7%</td>
                            <td>R$ 22.500,00</td>
                        </tr>
                        <tr>
                            <td>De 1.800.000,01 a 3.600.000,00</td>
                            <td>14,3%</td>
                            <td>R$ 87.300,00</td>
                        </tr>
                        <tr>
                            <td>De 3.600.000,01 a 4.800.000,00</td>
                            <td>19%</td>
                            <td>R$ 378.000,00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-2" class="font-weight-bolder text-ascont">Anexo II – Partilha do Simples Nacional - Indústria</td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-2-remove" class="font-weight-bolder text-ascont">Anexo II – Partilha do Simples Nacional - Indústria</td>
                    </tr>
                </table>
                <table id="table-2" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Receita Bruta em 12 meses (em R$)</td>
                            <td>Alíquota Nominal</td>
                            <td>Valor a deduzir (em R$)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Até 180.000,00</td>
                            <td>4,5%</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>De 180.000,01 a 360.000,00</td>
                            <td>7,8%</td>
                            <td>R$ 5.940,00</td>
                        </tr>
                        <tr>
                            <td>De 360.000,01 a 720.000,00</td>
                            <td>10%</td>
                            <td>R$ 13.860,00</td>
                        </tr>
                        <tr>
                            <td>De 720.000,01 a 1.800.000,00</td>
                            <td>11,2%</td>
                            <td>	
                                R$ 22.500,00</td>
                        </tr>
                        <tr>
                            <td>De 1.800.000,01 a 3.600.000,00</td>
                            <td>14,7%</td>
                            <td>R$ 85.500,00</td>
                        </tr>
                        <tr>
                            <td>De 3.600.000,01 a 4.800.000,00</td>
                            <td>30%</td>
                            <td>R$ 720.000,00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-3" class="font-weight-bolder text-ascont">Anexo III – Partilha do Simples Nacional – Serviços e Locação de Bens Móveis</td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-3-remove" class="font-weight-bolder text-ascont">Anexo III – Partilha do Simples Nacional – Serviços e Locação de Bens Móveis</td>
                    </tr>
                </table>
                <table id="table-3" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Receita Bruta em 12 meses (em R$)</td>
                            <td>Alíquota Nominal</td>
                            <td>Valor a deduzir (em R$)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Até 180.000,00</td>
                            <td>6%</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>De 180.000,01 a 360.000,00</td>
                            <td>11,2%</td>
                            <td>R$ 9.360,00</td>
                        </tr>
                        <tr>
                            <td>De 360.000,01 a 720.000,00</td>
                            <td>13,5%</td>
                            <td>	
                                R$ 17.640,00</td>
                        </tr>
                        <tr>
                            <td>De 720.000,01 a 1.800.000,00</td>
                            <td>16%</td>
                            <td>R$ 35.640,00</td>
                        </tr>
                        <tr>
                            <td>De 1.800.000,01 a 3.600.000,00</td>
                            <td>21%</td>
                            <td>R$ 125.640,00</td>
                        </tr>
                        <tr>
                            <td>De 3.600.000,01 a 4.800.000,00</td>
                            <td>33%</td>
                            <td>R$ 648.000,00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-4" class="font-weight-bolder text-ascont">Anexo IV – Partilha do Simples Nacional – Serviços
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-4-remove" class="font-weight-bolder text-ascont">Anexo IV – Partilha do Simples Nacional – Serviços
                        </td>
                    </tr>
                </table>
                <table id="table-4" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Receita Bruta em 12 meses (em R$)</td>
                            <td>Alíquota Nominal</td>
                            <td>Valor a deduzir (em R$)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Até 180.000,00</td>
                            <td>4,5%</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>De 180.000,01 a 360.000,00</td>
                            <td>9%</td>
                            <td>R$ 8.100,00</td>
                        </tr>
                        <tr>
                            <td>De 360.000,01 a 720.000,00</td>
                            <td>10,2%</td>
                            <td>R$ 12.420,00</td>
                        </tr>
                        <tr>
                            <td>De 720.000,01 a 1.800.000,00</td>
                            <td>14%</td>
                            <td>	
                                R$ 39.780,00</td>
                        </tr>
                        <tr>
                            <td>De 1.800.000,01 a 3.600.000,00</td>
                            <td>22%</td>
                            <td>	
                                R$ 183.780,00</td>
                        </tr>
                        <tr>
                            <td>De 3.600.000,01 a 4.800.000,00</td>
                            <td>33%</td>
                            <td>R$ 828.000,00</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-5" class="font-weight-bolder text-ascont">Anexo V – Partilha do Simples Nacional – Serviços
                        </td>
                    </tr>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <td id="btn-table-5-remove" class="font-weight-bolder text-ascont">Anexo V – Partilha do Simples Nacional – Serviços
                        </td>
                    </tr>
                </table>
                <table id="table-5" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Receita Bruta em 12 meses (em R$)</td>
                            <td>Alíquota Nominal</td>
                            <td>Valor a deduzir (em R$)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Até 180.000,00</td>
                            <td>15,5%</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>De 180.000,01 a 360.000,00</td>
                            <td>18%</td>
                            <td>R$ 4.500,00</td>
                        </tr>
                        <tr>
                            <td>De 360.000,01 a 720.000,00</td>
                            <td>19,5%</td>
                            <td>R$ 9.900,00</td>
                        </tr>
                        <tr>
                            <td>De 720.000,01 a 1.800.000,00</td>
                            <td>20,5%</td>
                            <td>R$ 17.100,00</td>
                        </tr>
                        <tr>
                            <td>De 1.800.000,01 a 3.600.000,00</td>
                            <td>23%</td>
                            <td>R$ 62.100,00</td>
                        </tr>
                        <tr>
                            <td>De 3.600.000,01 a 4.800.000,00</td>
                            <td>30,50%</td>
                            <td>R$ 540.000,00</td>
                        </tr>
                    </tbody>
                </table>
        
            </div>
            <br><br>
        </div>
        <script>
            $(document).ready(function(){
                $("#table-1").hide();
                $("#table-2").hide();
                $("#table-3").hide();
                $("#table-4").hide();
                $("#table-5").hide();
                $("#btn-table-1-remove").hide();
                $("#btn-table-2-remove").hide();
                $("#btn-table-3-remove").hide();
                $("#btn-table-4-remove").hide();
                $("#btn-table-5-remove").hide();
        
                $("#btn-table-1").click(function(){
                    $("#btn-table-1").hide();
                    $("#btn-table-1-remove").show();
                    $("#table-1").show();
                });
                $("#btn-table-2").click(function(){
                    $("#btn-table-2").hide();
                    $("#btn-table-2-remove").show();
                    $("#table-2").show();
                });
                $("#btn-table-3").click(function(){
                    $("#btn-table-3").hide();
                    $("#btn-table-3-remove").show();
                    $("#table-3").show();
                });
                $("#btn-table-4").click(function(){
                    $("#btn-table-4").hide();
                    $("#btn-table-4-remove").show();
                    $("#table-4").show();
                });
                $("#btn-table-5").click(function(){
                    $("#btn-table-5").hide();
                    $("#btn-table-5-remove").show();
                    $("#table-5").show();
                });
        
                $("#btn-table-1-remove").click(function(){
                    $("#btn-table-1").show();
                    $("#btn-table-1-remove").hide();
                    $("#table-1").hide();
                });
                $("#btn-table-2-remove").click(function(){
                    $("#btn-table-2").show();
                    $("#btn-table-2-remove").hide();
                    $("#table-2").hide();
                });
                $("#btn-table-3-remove").click(function(){
                    $("#btn-table-3").show();
                    $("#btn-table-3-remove").hide();
                    $("#table-3").hide();
                });
                $("#btn-table-4-remove").click(function(){
                    $("#btn-table-4").show();
                    $("#btn-table-4-remove").hide();
                    $("#table-4").hide();
                });
                $("#btn-table-5-remove").click(function(){
                    $("#btn-table-5").show();
                    $("#btn-table-5-remove").hide();
                    $("#table-5").hide();
                });
        
            });
        </script>','description' => 'Página', 'url' => 'tabelas-auxiliares','created_at' => Carbon::now()],
            ['title' => 'Links Úteis',
            'content' => '<div class="col">
            <div class="row d-flex">
                <h1 class="parceiros m-auto">Links Uteis</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a href="http://servicos.receita.fazenda.gov.br/Servicos/cnpjreva/Cnpjreva_Solicitacao.asp" target="_blank">
                        Emissão do Cartão do CNPJ 
                    </a> <br>
                    <a href="http://www.portaldoempreendedor.gov.br/temas/ja-sou/servicos/emitir-certificado-cnpj-ccmei/certificado-cnpj" target="_blank">
                        Certificado MEI 
                    </a> <br>
                    <a href="http://www.tst.jus.br/certidao" target="_blank">
                        Certidão Negativa – Débitos Trabalhistas 
                    </a> <br>
                    <a href="https://www.dividaativa.pge.sp.gov.br/sc/pages/pagamento/gareLiquidacao.jsf" target="_blank">
                        Certidão Negativa – Dívida Ativa Estadual
                    </a> <br>
                    <a href="https://esaj.tjsp.jus.br/sco/abrirCadastro.do" target="_blank">
                        Certidão Negativa – Falência e Concordata
                    </a> <br>
                    <a href="http://cnd.dataprev.gov.br/cws/contexto/cnd/cnd.html" target="_blank">
                        Certidão Negativa – INSS 
                    </a> <br>
                    <a href="https://consulta-crf.caixa.gov.br/consultacrf/pages/consultaEmpregador.jsf" target="_blank">
                        Certidão Negativa – FGTS 
                    </a> <br>
                    <a href="http://web.trf3.jus.br/certidao/Certidao/Solicitar            " target="_blank">
                        Certidão Negativa – Justiça Federal 
                    </a> <br>
                    <a href="http://www.presidenteprudente.sp.gov.br/servicos/certidoes/default.asp" target="_blank">
                        Certidão Negativa – Municipal (Pres. Prudente) 
                    </a> <br>
                    <a href="http://servicos.receita.fazenda.gov.br/Servicos/certidao/CndConjuntaInter/InformaNICertidao.asp?Tipo=1" target="_blank">
                        Certidão Negativa – Receita Federal PGFN 
                    </a> <br>
                    <a href="http://servicos.receita.fazenda.gov.br/Servicos/certidao/CndConjuntaInter/InformaNICertidao.asp?Tipo=2" target="_blank">
                        Certidão Negativa – Receita Federal CPF 
                    </a> <br>
                    <a href="https://servicos.receita.fazenda.gov.br/Servicos/CPF/ConsultaSituacao/ConsultaPublica.asp" target="_blank">
                        Consulta de CPF 
                    </a> <br>
                    <a href="http://www.tse.jus.br/eleitor/titulo-e-local-de-votacao/consulta-por-nome" target="_blank">
                        Consulta de Título de Eleitor 
                    </a> <br>
                    <a href="http://www.ssp.sp.gov.br/servicos/atestado.aspx" target="_blank">
                        Atestado de Antecedentes Criminais 
                    </a> <br>
                    <a href="http://www.tse.jus.br/eleitor/titulo-de-eleitor/situacao-eleitoral" target="_blank">
                        Certidão Quitação Eleitoral 
                    </a> <br>
                </div>
                <div class="col-md-6">
                    <a href="http://www.planalto.gov.br/ccivil_03/LEIS/L8078.htm" target="_blank">
                        Código Defesa do Consumidor 
                    </a> <br>
                    <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/BuscaCepEndereco.cfm" target="_blank">
                        Busca de CEP 
                    </a> <br>
                    <a href="https://cnae.ibge.gov.br/" target="_blank">
                        Consulta de CNAE 
                    </a> <br>
                    <a href="http://www.mtecbo.gov.br/cbosite/pages/pesquisas/BuscaPorTitulo.jsf" target="_blank">
                        Consulta de CBO 
                    </a> <br>
                    <a href="http://www.nfe.fazenda.gov.br/PORTAL/principal.aspx" target="_blank">
                        Consulta de Autenticidade DANFE 
                    </a> <br>
                    <a href="https://www60.fazenda.sp.gov.br/wps_migrated/portal" target="_blank">
                        Consulta de Contribuinte do ICMS em SP 
                    </a> <br>
                    <a href="https://www.jucesponline.sp.gov.br/ResultadoBusca.aspx" target="_blank">
                        Consulta de Nome de Empesa – JUCESP 
                    </a> <br>
                    <a href="http://www8.receita.fazenda.gov.br/SimplesNacional/Aplicacoes/ATBHE/ConsultaOptantes.app/ConsultarOpcao.aspx" target="_blank">
                        Consulta de Optante do Simples Nacional 
                    </a> <br>
                    <a href="http://www.sintegra.gov.br/" target="_blank">
                        Consulta Inscrição Estadual – SINTEGRA 
                    </a> <br>
                    <a href="https://extratoir.inss.gov.br/irpf01/pages/consultarExtratoIR.xhtml" target="_blank">
                        Informe de Rendimento do INSS 
                    </a> <br>
                    <a href="http://consultacadastral.inss.gov.br/Esocial/pages/index.xhtml;jsessionid=ZyvFpSGLSvJYJnVZq6r3Rw1G7bTd1fDlk1pVg2s9GdT1bXLv2JyJ!156267775" target="_blank">
                        Consulta de Qualificação Cadastral – E-SOCIAL 
                    </a> <br>
                    <a href="https://login.esocial.gov.br/login.aspx" target="_blank">
                        Portal E-SOCIAL Doméstico 
                    </a> <br>
                    <a href="http://sal.receita.fazenda.gov.br/PortalSalInternet/faces/pages/index.xhtml;jsessionid=5dea5e71340819b63de600decc1baf1e8c9b47c058aa99c0362c6b7bfd1cc716.e3uNaxyKbh0Ke3mOb3qQch0Qai0            " target="_blank">
                        Recálculo de GPS EMPRESA 
                    </a> <br>
                    <a href="http://sal.receita.fazenda.gov.br/PortalSalInternet/faces/pages/calcContribuicoesCI/filiadosApos/selecionarOpcoesCalculoApos.xhtml" target="_blank">
                        Recálculo GPS Contribuinte Individual 
                    </a> <br>
                    <a href="http://icms-st.com.br/sawil.com.br/contabilidade/arquivos/Cartaz%20Procon.pdf" target="_blank">
                        Cartaz – Procon 
                    </a> <br>
                </div>
            </div>
        </div>',
            'description' => 'Página', 'url' => 'links-uteis','created_at' => Carbon::now()],
            ['title' => 'Nossos Parceiros',
            'content' =>'<div class="col">
            <!-- conteudo -->
            <div class="row parc-princ">
                <div class="col-lg-12">
                    <h1 class="parceiros">Parcerias de Sucesso!</h1>
                    <div class="row p-area">
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" src="http://ascont.test/images/samuel-sonia.png">
                            <h2 class="parceirot">Samuel Sakamoto</h2>
                            <h1 class="parceirotb">Advogado</h1>
                            <a class="btn btn-primary  contato-parc" href="#">Ver contato</a>
                        </div>
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" height="69.9px" src="http://ascont.test/images/armitage.png">
                            <h2 class="parceirot">Armitage Web</h2>
                            <h1 class="parceirotb">Code House</h1>
                            <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
                        </div>
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" src="http://ascont.test/images/juliana-arq.png">
                            <h2 class="parceirot">Juliana Cavalheiro</h2>
                            <h1 class="parceirotb">Arquitetura</h1>
                            <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
                        </div>
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" src="http://ascont.test/images/samuel-sonia.png">
                            <h2 class="parceirot">Samuel Sakamoto</h2>
                            <h1 class="parceirotb">Advogado</h1>
                            <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
                        </div>
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" height="69.9px" src="http://ascont.test/images/armitage.png">
                            <h2 class="parceirot">Armitage Web</h2>
                            <h1 class="parceirotb">Code House</h1>
                            <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
                        </div>
                        <div class="col-6 col-lg-4 mb-2 ">
                            <img class="imagep" src="http://ascont.test/images/juliana-arq.png">
                            <h2 class="parceirot">Juliana Cavalheiro</h2>
                            <h1 class="parceirotb">Arquitetura</h1>
                            <a class="btn btn-primary contato-parc" href="#">Ver contato</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>','description' => 'Página', 'url' => 'parceiros','created_at' => Carbon::now()],
        ]);
    }
}

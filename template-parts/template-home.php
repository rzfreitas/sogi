<?php /* Template Name: Home */ 

get_header(); ?>

<section>
<div class="bg-home">
</div>
</section>

<section>
	<div class="bg-blue p-t-50 p-b-50">
		<div class="container">
			
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row p-b-50 vantagens-home">
			<div class="col-md-4">
				<div class="d-flex">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/analytics.png" alt="monitoramento">
					</div>
					<div>
						<h3>Monitoramento</h3>
						<ul>
							<li>Alertas</li>
							<li>Avisos de ações vencidas </li>
							<li>Cartas mensais de atualização</li>
							<li>Acompanhamento de pendências.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<table>
					<tr>
						<td>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/relatorios.png" alt="relatorios">
						</td>
						<td>
							<h3>Relatórios</h3>
							<ul>
								<li>Geração de relatórios em PDF com posicionamento sobre auditorias, tratamento de não conformidade e de pendênciaertas</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<table>
					<tr>
						<td>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/indicadores.png" alt="indicadores">
						</td>
						<td>
							<h3>Monitoramento</h3>
							<ul>
								<li>Acompanhe as estatísticas da sua conformidade legal através de gráficos gerados automaticamente pelo módulo soGi Indicadores</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
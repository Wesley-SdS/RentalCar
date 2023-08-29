<p align="center"><img src="link_para_imagem_do_seu_projeto" alt="Logo do Projeto"></p>

<h1 align="center">Projeto Locadora de Veiculo com Laravel, VueJs e MSQL</h1>

<p>Esse projeto demonstra uma locadora funcional com front para locação e painel administrativo para o controle</p>

<h2>Como Baixar o Projeto</h2>

<p>Siga os passos abaixo para clonar o projeto:</p>

<pre><code>git clone https://github.com/Wesley-SdS/RentalCar
</code></pre>

<h2>Configuração do Backend</h2>

<p>Para configurar o backend, siga as instruções abaixo:</p>

<ol>
  <li>Instale as dependências do projeto:</li>
</ol>

<pre><code>composer install
</code></pre>

<ol start="2">
  <li>Configure as variáveis de ambiente:</li>
</ol>

<pre><code>cp .env.example .env
php artisan key:generate
</code></pre>




<ol start="4">
  <li>Crie as migrações das tabelas e os Seeders:</li>
</ol>

<pre><code>php artisan migrate --seed
</code></pre>



<pre><code>php artisan storage:link
</code></pre>

<h2>Login</h2>

<p>Utilize as seguintes credenciais para fazer o login como usuário de teste:</p>

<ul>
  <li>Email: admin@example.com</li>
  <li>Senha: admin</li>
</ul>

<h2>Configuração do Frontend</h2>

<p>Siga as etapas abaixo para configurar o frontend:</p>

<ol>
  <li>Atualize as dependências:</li>
</ol>

<pre><code>npm install
</code></pre>



<pre><code>npm run dev
</code></pre>

<ol start="3">
  <li>Para executar em ambiente de produção:</li>
</ol>

<pre><code>npm run build
</code></pre>

<p>Certifique-se de que tanto o backend quanto o frontend estejam configurados corretamente para obter o máximo aproveitamento deste projeto de exemplo.</p>

<hr>

<p><em>Nota: Certifique-se de ter as versões adequadas do PHP, Composer e Node.js instaladas em seu sistema antes de prosseguir com as etapas de configuração.</em></p>



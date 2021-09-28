# docker-jcpm-marketplace
Arquivos de configuração para ambiente docker do marketplace JCPM.

<h2>Configurar Ambiente</h2>
<ol>
    <li>Instale Docker e Docker compose em sua máquina.</li>
    <li>Adicione a seguinte linha em seu arquivo hosts: "127.0.0.1 web1.marketplace.test".</li>
    <li>Crie um arquivo .env com base no arquivo example.env e altere as variáveis de acordo com seu ambiente.</li>
    <li>Na pasta do seu projeto do marketplace, crie o arquivo "wp-config.php" com base no arquivo de exemplo "example-wp-config.php".</li>
    <li>Siga as instruções de instalção da aplicação disponíveis neste link: "https://github.com/nedigitaljcpm/marketplace/wiki/Marketplace#instala%C3%A7%C3%A3o".</li>
    <li>Na pasta onde foi feito o download deste repositório, execute o comando "sudo docker-compose up -d" para criar os containers.</li>
    <li>Se tudo der certo, será possível acessar a aplicação na URL "http://web1.marketplace.test/"</li>
</ol>

<h2>Configurar Xdebug no VSCode</h2>
<ol>
    <li>Instale a extensão "PHP Debug - Felix Becker".</li>
    <li>Habilite os breakpoints em seu VSCode. </li>
        <ol>
            <li>Vá em File > preferences > settings</li>
            <li>Na tela de Settings vá em Features > Debug</li>
            <li>Habilite a opção "Allow Breakpoints Everywhere - Allow setting breakpoints in any file".</li>
        </ol>
    <li>Configure o debug. Crie na raiz do projeto dentro da pasta ".vscode" o arquivo "launch.json" e cole o conteúdo do arquivo de exemplo "example-launch.json". Caso a pasta ".vscode" não exista, crie uma nova.</li>
</ol>

Se as configurações estiverem corretas, já será possível depurar sua aplicação. Para iniciar a depuração, defina um brakpoint e clique em "F5" para iniciar a depuração e acesse a aplicação pelo navegador. Ao acessar a aplicação, a execução desta deverá parar no breakpoint.



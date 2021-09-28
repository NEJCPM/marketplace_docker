# docker-jcpm-marketplace
<h1>Arquivos de configuração para ambiente docker do marketplace JCPM.</h1>

<h2>Configurar Ambiente</h2>
1. Instale Docker e Docker compose em sua máquina.
2. Adicione a seguinte linha em seu arquivo hosts: "127.0.0.1 web1.marketplace.test".
3. Crie um arquivo .env com base no arquivo example.env e altere as variáveis de acordo com seu ambiente.
4. Na pasta do seu projeto do marketplace, crie o arquivo "wp-config.php" com base no arquivo de exemplo "example-wp-config.php".
5. Siga as instruções de instalção da aplicação disponíveis neste link: "https://github.com/nedigitaljcpm/marketplace/wiki/Marketplace#instala%C3%A7%C3%A3o".
6. Na pasta onde foi feito o download deste repositório, execute o comando "sudo docker-compose up -d" para criar os containers.
7. Se tudo der certo, será possível acessar a aplicação na URL "http://web1.marketplace.test/"

<h2>Configurar Xdebug no VSCode</h2>
1. Instale a extensão "PHP Debug - Felix Becker".
2. Habilite os breakpoints em seu VSCode. 
    2.1. Vá em File > preferences > settings
    2.2. Na tela de Settings vá em Features > Debug
    2.3. Habilite a opção "Allow Breakpoints Everywhere - Allow setting breakpoints in any file".
3. Configure o debug. Crie na raiz do projeto dentro da pasta ".vscode" o arquivo "launch.json" e cole o conteúdo do arquivo de exemplo "example-launch.json". Caso a pasta ".vscode" não exista, crie uma nova.

Se as configurações estiverem corretas, já será possível depurar sua aplicação. Para iniciar a depuração, defina um brakpoint e clique em "F5" para iniciar a depuração e acesse a aplicação pelo navegador. Ao acessar a aplicação, a execução desta deverá parar no breakpoint.



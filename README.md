# docker-jcpm-marketplace
Arquivos de configuração para ambiente docker do marketplace JCPM.


1. Instale Docker e Docker compose em sua máquina.
2. Adicione a seguinte linha em seu arquivo hosts: "127.0.0.1 web1.marketplace.test".
3. Crie um arquivo .env com base no arquivo example.env e altere as variáveis de acordo com seu ambiente.
4. Na pasta do seu projeto do marketplace, crie o arquivo "wp-config.php" com base no arquivo de exemplo "example-wp-config.php".
5. Siga as instruções de instalção da aplicação disponíveis neste link: "https://github.com/nedigitaljcpm/marketplace/wiki/Marketplace#instala%C3%A7%C3%A3o".
6. Na pasta onde foi feito o download deste repositório, execute o comando "sudo docker-compose up -d" para criar os containers.
7. Se tudo der certo, será possível acessar a aplicação na URL "http://web1.marketplace.test/"

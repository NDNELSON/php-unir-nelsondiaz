# php-unir-nelsondiaz
## La página final se puede visitar en https://php.ndtech.com.mx/i
## Para usar y poder er esta pagina web sigue las instrucciones:

## 1.- Para clonar el repositorio
<pre>
    <code>
        # git clone https://github.com/NDNELSON/php-unir-nelsondiaz.git
    </code>
</pre>

## 2.- Instalar docker y docker compose
 
**Windows**
 - Descarga y ejecuta Docker Desktop https://docs.docker.com/desktop/install/windows-install/

 **Mac OS**
 
 Opción 1 - Descarga https://docs.docker.com/desktop/install/windows-install/
 Opcion 2 - Desde el terminal 
 <pre>
    <code>
    Inatalar Home brew
    # /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
    # brew update

    Instalar Docker
    # brew install docker
    # brew install docker-machine
    # brew install --cask virtualbox

    Instalar Docker Compose
    # brew install docker-compose 
    # docker-machine start default
    # docker-machine stop default
    # eval $(docker-machine env default)
    
    Referencia:  https://www.robinwieruch.de/docker-macos/
    # docker run hello-world
    </code>
</pre>

**Ubuntu**
    Instalar Docker
<pre>
    <code>
        # sudo apt update
        # sudo apt install apt-transport-https ca-certificates curl software-properties-common
        # curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
        # sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
        # sudo apt update
        # sudo apt install docker-ce 
        # sudo systemctl status docker
        # sudo usermod -aG docker ${USER}
    </code>
</pre>

    Instalar Docker Compose
    <pre>
    <code>
        # sudo curl -L "https://github.com/docker/compose/releases/download/1.28.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
        # sudo chmod +x /usr/local/bin/docker-compose
        # docker-compose --version
        
    </code>
</pre>

## 3.- En el directorio donde se clono el proyecto 
    <pre>
    <code>
        # docker-compose up -d
        # docker ps
    </code>
</pre>

## 4.- Ingresar a https://localhost:8001
    Este path dependera del puerto de configuración en el archivo docker-compose.yaml

**Correr en un servidor xampp o lampp**
    Copiar y pegar el contenido de la carpeta /html  a  /xampp/htdocs
    Copiar y pegar el contenido de la carpeta /html  a  /lampp/htdocs

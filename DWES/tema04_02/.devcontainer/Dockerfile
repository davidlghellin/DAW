# See here for image contents: https://github.com/microsoft/vscode-dev-containers/tree/v0.134.0/containers/php/.devcontainer/base.Dockerfile
ARG VARIANT="7"
FROM mcr.microsoft.com/vscode/devcontainers/php:0-${VARIANT}

# [Optional] Install a version of Node.js using nvm for front end dev
ARG INSTALL_NODE="true"
ARG NODE_VERSION="lts/*"
RUN if [ "${INSTALL_NODE}" = "true" ]; then su vscode -c "source /usr/local/share/nvm/nvm.sh && nvm install ${NODE_VERSION} 2>&1"; fi

# [Optional] Uncomment this section to install additional OS packages.
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get -y install --no-install-recommends unzip wget nodejs

RUN sudo mkdir -p /workspaces/sonarqube
RUN wget https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-4.2.0.1873-linux.zip
RUN wget https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-4.2.0.1873-linux.zip -P /workspaces/sonarqube && \
    cd /workspaces/sonarqube && unzip sonar-scanner-cli-4.2.0.1873-linux.zip
RUN sudo mv /workspaces/sonarqube/sonar-scanner-4.2.0.1873-linux /opt/sonar-scanner

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1
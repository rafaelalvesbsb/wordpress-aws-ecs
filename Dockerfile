# Use a imagem oficial da Bitnami WordPress como base
FROM bitnami/wordpress:latest

# Copie o arquivo de configuração personalizado
COPY wp-config.php /opt/bitnami/wordpress/wp-config.php

# Defina variáveis de ambiente (opcional, pode ser gerenciado via ECS ou outra plataforma)
ENV WORDPRESS_DATABASE_HOST=${WORDPRESS_DATABASE_HOST}
ENV WORDPRESS_DATABASE_USER=${WORDPRESS_DATABASE_USER}
ENV WORDPRESS_DATABASE_PASSWORD=${WORDPRESS_DATABASE_PASSWORD}
ENV WORDPRESS_DATABASE_NAME=${WORDPRESS_DATABASE_NAME}

# Exponha a porta 8080 (Bitnami WordPress usa 8080 por padrão)
EXPOSE 8080

# Comando para iniciar o WordPress (já definido na imagem Bitnami)
CMD ["nami", "start", "--foreground", "wordpress"]

#!/bin/bash

# Wait for WordPress to be ready
echo "Waiting for WordPress to be ready..."
sleep 15

# Install WordPress
docker exec -it wp_cli wp core install \
  --url=http://localhost:8080 \
  --title="Advocacia Pro" \
  --admin_user=admin \
  --admin_password=admin \
  --admin_email=admin@example.com

# Update options
docker exec -it wp_cli wp option update blogdescription "Excelência Jurídica em Cada Detalhe"
docker exec -it wp_cli wp option update permalink_structure '/%postname%/'

# Delete default posts and pages
docker exec -it wp_cli wp site empty --yes

# Create Pages
HOME_ID=$(docker exec -it wp_cli wp post create --post_type=page --post_title="Home" --post_status=publish --porcelain)
SOBRE_ID=$(docker exec -it wp_cli wp post create --post_type=page --post_title="Sobre a Empresa" --post_status=publish --post_content="<!-- wp:paragraph --><p>Nós somos um escritório focado em excelência. Nossa missão é proteger seus direitos com valores inegociáveis.</p><!-- /wp:paragraph -->" --porcelain)
SERVICOS_ID=$(docker exec -it wp_cli wp post create --post_type=page --post_title="Serviços" --post_status=publish --post_content="<!-- wp:list --><ul><li>Direito Corporativo</li><li>Consultoria Trabalhista</li><li>Planejamento Tributário</li><li>Contencioso Civil</li></ul><!-- /wp:list -->" --porcelain)
CONTATO_ID=$(docker exec -it wp_cli wp post create --post_type=page --post_title="Contato" --post_status=publish --post_content="<!-- wp:paragraph --><p>Entre em contato conosco pelo WhatsApp ou nos visite em nosso escritório.</p><!-- /wp:paragraph -->" --porcelain)

# Set Front Page
docker exec -it wp_cli wp option update show_on_front page
docker exec -it wp_cli wp option update page_on_front $HOME_ID

# Activate Theme
docker exec -it wp_cli wp theme activate advocacia-pro

# Create and Assign Menu
docker exec -it wp_cli wp menu create "Menu Principal"
docker exec -it wp_cli wp menu item add-post "Menu Principal" $HOME_ID
docker exec -it wp_cli wp menu item add-post "Menu Principal" $SOBRE_ID
docker exec -it wp_cli wp menu item add-post "Menu Principal" $SERVICOS_ID
docker exec -it wp_cli wp menu item add-post "Menu Principal" $CONTATO_ID
docker exec -it wp_cli wp menu location assign "Menu Principal" primary

echo "WordPress setup is complete."

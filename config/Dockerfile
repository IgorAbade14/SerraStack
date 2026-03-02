FROM nginx:alpine

# Remove a config padrão para não dar conflito
RUN rm /etc/nginx/conf.d/default.conf

# Copia a SUA configuração mágica para o lugar certo
COPY nginx.conf /etc/nginx/nginx.conf

# Não precisa de COPY ./app aqui se você já usa VOLUMES no Compose!
EXPOSE 80
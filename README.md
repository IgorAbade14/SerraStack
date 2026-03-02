# 🚢 SerraStack v2.0 - Full Stack Docker Environment

O SerraStack é um ambiente de desenvolvimento de alta performance que automatiza a orquestração de uma stack LEMP (Linux, Nginx, MySQL, PHP) local. Ele garante que sua aplicação tenha persistência de dados, rede isolada e validação automática com um único comando.

---

## 🚀 Novas Funcionalidades (v2.0)

### Orquestração Multi-Container
Gerenciamento sincronizado de Nginx, PHP-FPM e MySQL 8.0.

### Persistência com Named Volumes
Uso de volumes Docker dedicados (`db_data`) para evitar erros de permissão e garantir que seus dados não sumam ao desligar.

### Rede Isolada (Bridge)
Comunicação segura entre serviços via DNS interno do Docker.

### Auto-Healing Script
Script em Bash que limpa containers órfãos e reconstrói o ambiente do zero.

### Verificação de DNS
Validação interna de rede para garantir que o PHP "enxerga" o banco antes de liberar o acesso.

---

## 📂 Estrutura do Projeto

- `docker-compose.yml`: A "planta baixa" da infraestrutura.
- `nginx.conf`: Configuração otimizada para servir PHP e arquivos estáticos.
- `app/index.php`: Script de teste que valida a conexão e registra logs no banco.
- `scripts/serrastack.sh`: Automação de build, cleanup e healthcheck.

---

## 🛠️ Requisitos

- OS: Linux (Ubuntu/Mint recomendado).
- Docker & Docker Compose (V2 recomendado).
- curl (para os healthchecks do script).

---

## 📖 Como Usar

### Clone o repositório:

```bash
git clone https://github.com/IgorAbade14/SerraStack.git
cd SerraStack
```

### Dê permissão e execute o script de automação:

```bash
chmod +x scripts/serrastack.sh
./scripts/serrastack.sh
```

### Acesse no navegador:

```
http://localhost:8082
```

---

## 🧠 Jornada de Aprendizado (DevOps Path)

Este projeto documenta a evolução técnica em:

- Idempotência: Scripts que podem rodar mil vezes e entregam sempre o mesmo resultado.
- Resolução de Problemas (Troubleshooting): Ajuste de permissões de socket no MySQL e depuração de redes Docker.
- Infrastructure as Code (IaC): Definição de serviços e volumes via YAML.
- Healthchecks: Validação de serviços antes da entrega final.

---

## 👨‍💻 Desenvolvido por

[https://github.com/IgorAbade14
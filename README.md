# Nutri Bem - E-commerce de Produtos Naturais

Este repositório contém o código-fonte do site de e-commerce Nutri Bem, uma loja de produtos naturais desenvolvida como parte do PROJETO DE EXTENSÃO E INOVAÇÃO INTERDISCIPLINAR (PEI) 2, obrigatório para a formação no curso de Análise e Desenvolvimento de Sistemas na Faculdade Multivix.

## Integrantes do Grupo

- Brayan Cesar Muzzi
- Brayann Wheberth Freitas Barbosa
- Eliezér Barbosa Machado
- Leandro de Carvalho Pacheco
- Marcos André Barbosa
- Mateus Milhomem Mattos
- Sandra Paula dos Santos Silva

## Sobre o Projeto

Nutri Bem é uma plataforma de comércio eletrônico voltada para a venda de produtos naturais. O projeto foi desenvolvido utilizando as seguintes tecnologias e ferramentas:

- **WordPress**: Sistema de gerenciamento de conteúdo (CMS) utilizado para a construção do site.
- **Elementor**: Plugin de construção de páginas que permite criar layouts personalizados com facilidade.
- **WooCommerce**: Plugin de e-commerce para WordPress que adiciona funcionalidades de loja online ao site.
- **Tema Organic Food Store**: Tema escolhido para dar ao site uma aparência moderna e funcional, adequada para o nicho de produtos naturais.

## Funcionalidades

- **Catálogo de Produtos**: Exibição de produtos naturais organizados em categorias.
- **Carrinho de Compras**: Funcionalidade que permite aos usuários adicionar produtos ao carrinho e revisar suas compras.
- **Checkout**: Processo de finalização de compra com opções de pagamento e envio.
- **Painel de Administração**: Área administrativa para gerenciar produtos, pedidos e clientes.
- **Responsividade**: Design responsivo que garante a melhor experiência de usuário em dispositivos móveis e desktops.

## Estrutura do Projeto

A estrutura do repositório está organizada da seguinte maneira:

- **/wp-content/themes/organic-food-store**: Contém os arquivos do tema Organic Food Store.
- **/wp-content/plugins/elementor**: Contém os arquivos do plugin Elementor.
- **/wp-content/plugins/woocommerce**: Contém os arquivos do plugin WooCommerce.
- **/uploads**: Diretório onde os arquivos de mídia (imagens, vídeos, etc.) são armazenados.
- **/database**: Backup do banco de dados utilizado pelo WordPress.

## Instalação e Configuração

Para configurar o projeto localmente, siga os passos abaixo:

1. **Clone o repositório**:
    ```bash
    git clone https://github.com/seu-usuario/nutri-bem.git
    ```

2. **Configure o servidor local**:
    - Instale o WordPress em seu servidor local.
    - Copie os arquivos do repositório para o diretório do WordPress.

3. **Instale os plugins necessários**:
    - Acesse o painel administrativo do WordPress.
    - Vá para "Plugins" > "Adicionar novo" e instale os plugins Elementor e WooCommerce.

4. **Ative o tema**:
    - Vá para "Aparência" > "Temas" e ative o tema Organic Food Store.

5. **Importe o banco de dados**:
    - Importe o backup do banco de dados localizado em `/database` utilizando a ferramenta de sua preferência (phpMyAdmin, por exemplo).

6. **Configure o WooCommerce**:
    - Siga o assistente de configuração do WooCommerce para definir as opções de pagamento, envio e outras preferências da loja.

## Contribuição

Contribuições são bem-vindas! Se você quiser colaborar com este projeto, por favor, siga as etapas abaixo:

1. Faça um fork deste repositório.
2. Crie uma nova branch com a sua feature ou correção de bug:
    ```bash
    git checkout -b minha-feature
    ```
3. Commit suas mudanças:
    ```bash
    git commit -m 'Adicionando minha feature'
    ```
4. Push para a branch criada:
    ```bash
    git push origin minha-feature
    ```
5. Abra um Pull Request e descreva as mudanças realizadas.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
# 🛒 Mercadinho | Sistema de Compras em PHP

Um sistema de compras desenvolvido em PHP para simular a experiência básica de um mercadinho diretamente pelo terminal. O projeto permite explorar categorias de produtos, consultar preços e estoque, selecionar itens e acompanhar os produtos adicionados ao carrinho.

Desenvolvido como prática de lógica de programação e manipulação de dados em PHP.

---

## 📋 Visão geral

A aplicação apresenta um menu interativo no terminal, onde o usuário pode escolher entre duas categorias de produtos, visualizar os itens disponíveis e adicioná-los ao carrinho de compras.

Os dados são organizados em arrays multidimensionais e associativos, permitindo acessar informações específicas de cada produto, como nome, preço e quantidade em estoque.

## ✨ Funcionalidades

- **Catálogo por categorias:** navegação entre produtos eletrônicos e naturais.
- **Consulta de produtos:** visualização de nome, preço e estoque disponível.
- **Seleção de produtos:** escolha de itens a partir de uma lista numerada.
- **Carrinho de compras:** armazenamento dos produtos selecionados durante a execução.
- **Visualização do carrinho:** consulta dos nomes e preços dos itens adicionados.
- **Menu interativo:** navegação contínua até a opção de encerramento.

## 🧺 Produtos disponíveis

| Categoria | Produto | Preço | Estoque |
|---|---|---:|---:|
| Eletrônicos | Celular | R$ 1.000,00 | 5 |
| Eletrônicos | Notebook | R$ 2.000,00 | 10 |
| Eletrônicos | Teclado | R$ 50,00 | 30 |
| Naturais | Planta verde | R$ 60,00 | 40 |
| Naturais | Planta dragão | R$ 600,00 | 3 |

## 🧠 Implementação e conceitos utilizados

O desenvolvimento foi construído utilizando recursos fundamentais da linguagem PHP:

- **Arrays multidimensionais:** organização dos produtos por categorias.
- **Arrays associativos:** armazenamento de atributos como nome, preço e estoque.
- **`foreach`:** percorrer e apresentar os produtos de cada categoria.
- **`switch`:** controlar as opções do menu principal.
- **`do...while`:** manter a aplicação em execução enquanto o usuário navega.
- **`readline()`:** receber entradas diretamente pelo terminal.
- **Manipulação de arrays:** adicionar produtos selecionados ao carrinho.

## 🛠️ Tecnologias

- PHP
- Terminal / CLI

## 🚀 Executando o projeto

**Pré-requisito:** PHP instalado e disponível no PATH do sistema.

Clone o repositório:

```bash
git clone https://github.com/kayolindo58/mercadinho.git
```

Entre na pasta:

```bash
cd mercadinho
```

Execute a aplicação:

```bash
php mercado.php
```

## 📁 Estrutura do projeto

```text
mercadinho/
└── mercado.php
```

## 🔧 Próximas evoluções

O projeto pode evoluir para um sistema de compras mais completo, incorporando:

- Validação das opções e dos produtos selecionados.
- Controle de quantidade por produto.
- Atualização automática do estoque.
- Cálculo do subtotal e valor total do carrinho.
- Remoção de produtos do carrinho.
- Finalização e resumo da compra.

---

**Status:** Projeto em desenvolvimento.

Desenvolvido por [Kayo Julian](https://github.com/kayolindo58).

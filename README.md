# Estoque System

## Form

- Nome do produto
- Preço do produto
- Quantidade do produto
- Categoria com `<select>` _(se for difícil, excluir)_

## Requisitos

- Ter `Dockerfile` e Composer _(charme)_
- Salvar os dados em JSON
- Validação de dados com `htmlspecialchars`
- Validar se os campos estão `empty`
- Validar se os números realmente são números
- A quantidade em estoque deve ser maior que 0
- Mostrar a lista de produtos em estoque para o usuário
- Excluir produto do estoque _(se não der, não tem problema)_

- json padrao

```bash
{
  "produtos": [
    {
      "id": 0,
      "nome": "Geladeira",
      "preco": 2000.0,
      "quantidade": 50,
      "categoria": "Eletrodomesticos"
    }
  ]
}

```

- Docker incluso

Para rodar:

```bash
docker compose up -d --build
```

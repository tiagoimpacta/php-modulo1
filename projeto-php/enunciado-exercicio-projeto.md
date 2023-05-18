# Exercícios - PROJETO

## namespaces

1. Criar namespace Impacta para todas as classes
2. Adicionar o namespace da classe Cliente em  cadastrodb.php.
3. Criar composer.json, contendo:

- Nome do Projeto: seunome/impacta
- Descrição: Projeto Sales Tec
- Configurações para o autoload (psr-4 apontando pro namespace Impacta e pasta src)

Obs.: o autoload também funciona para funções, basta adicionar após a propriedade psr-4 uma nova propriedade chamada "files" apontando para um array com o local do arquivo de funções: ["lib/funcoes.php"]

## autoload (cadastrodb, index, carrinho)

1. Gerar o autoload com usando o composer via CLI
2. Substituir require de funções e classes existentes pelo require do autoload
3. Fazer um teste mudando casas decimais da função float_to_reais e adicionando uma propriedade "telefone" na classe Cliente.
4. Depois remover estes testes (volte para 2 casas decimais e remova a prop. telefone").
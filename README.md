# Exemplo de rotas simplificadas com PHP
O proprosito dessas rotas é:
1. possibilitar o trabalho paralelo nos N módulos da aplicação sem a necessidade de adicionar novas entradas nos arquivos principais.
2. Incentivar a Reutilização de código
3. Incentivar a Padronização de código
4. Melhorar a Integração entre as classes e objetos
5. Isso facilita o baixo acoplamento e alta coesão entre as partes.
6. A quebra de um módulo não irá afetar todo o sistema.

## Pré requisitos
- PHP (5.6+)
- Apache 2
- De preferência utilizar uma Stack (Lamp / WAMP / Entre outros)
  
## Desenvolvimento
- Foi utilizado o padrão PRS-4
- Foi utilizado o padrão de namespaces PHP (são particulamente úteis para evitar colisão de nomes)

## Instalação

1. Baixar o fonte
2. Acessar o arquivo index.php
    
## Rotas
- Foi pensado na utilização de rotas tanto para o Front quanto para o BackEnd.
  
### FrontEnd

- As rotas do FrontEnd irão funcionar como links curtos para o usuario.
- também irão ajudar na reutilização e padronização de código HTML

### BackEnd

- AS rotas do BackEnd irão funcionar como uma API REST possibilitando a comunicação assincrona entre as partes. 
- Também é apontada como uma vantagem a auto-organização do código fonte.

## Diagrama das Rotas
![DiaRotas](Documentacao/Diagrama_de_Rotas.jpeg?raw=true "DiaRotas")
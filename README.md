# controle-estoque
Projeto criado para ajudar em uma demanda da minha esposa no seu serviço

Projeto tem como objetivo ajudar a minha esposa em um controle maior dos produtos usados, e principalmente poder ajudar com relatórios, como entre datas, entrada e saida, tem um campo que também pode ser selecionado caso seja escolhido a opção saida, pois aparecerá para escolher uma opção.

O projeto está bem simples, foi criado no modo estrutural, e não tem nenhum padrão. Literalmente está apenas funcionando hehehe.

Usei apenas html, css para poder estrutura o sistema, e um pouco de javascript para manipular alguns dados. Usei também a biblioteca Jquery, para tratar algumas requisições para o servidor. Usei a linguagem PHP para tratar as informações com o banco.

O sistema começou com uma ideia, e estou implementando já várias outras, tendo a possibilidade de crescer bastante, para um sistema mais complexo. 

O sistema tem um verificação de acesso com login e senha. Assim que as informações são validadas, é direcionado para a pagina index, onde tem um campo de pesquisa, um botão para realizar um relatório, e logo abaixo uma tabela contendo todas as informações que foram solicitadas ao banco, no caso os produtos cadastrados. Junto a cada linha da tabela contendo as informações do protudo, tem um botão de entrada e saida.

Cada vez que faz um operação com entrada e saida, é registrada no banco de dados, em uma tabela propria para isso. Contendo os campos, usuário que efetuou a operação, tipo de operação que foi feita, produto que sofreu a operação, quantidade da operação, quantidade atual da operação, medico - aqui é o nome do médico que foi feito a operação, mais esse campo é apenas quando a operação for de saida - e datatime, contendo a data e a hora que a operação foi feita.

O relatório é gerado em pdf, pode ser salvo e enviado para o responsável que interessa as informações.

Banco de dados usando é o MySQL, está aqui disponivel também o arquivo com as tabelas e campos.

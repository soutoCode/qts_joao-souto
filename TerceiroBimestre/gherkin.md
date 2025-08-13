```gherkin
Funcionalidade: Adicionar uma tarefa
  Como usuário do sistema
  Quero poder adicionar tarefas
  Para organizar minhas atividades

  Cenário: Adicionar tarefa com título e descrição
    Dado que estou na página de criação de tarefas
    Quando informo o título "Estudar BDD"
    E informo a descrição "Revisar conceitos de Gherkin"
    E clico em "Salvar"
    Então a tarefa "Estudar BDD" deve aparecer na lista de tarefas

  Cenário: Adicionar tarefa apenas com título
    Dado que estou na página de criação de tarefas
    Quando informo o título "Comprar café"
    E não preencho a descrição
    E clico em "Salvar"
    Então a tarefa "Comprar café" deve aparecer na lista de tarefas

  Cenário: Tentar adicionar tarefa sem título
    Dado que estou na página de criação de tarefas
    Quando não informo o título
    E clico em "Salvar"
    Então devo ver a mensagem "O título é obrigatório"

Funcionalidade: Vincular tarefa a uma data do calendário
  Como usuário do sistema
  Quero associar tarefas a datas específicas
  Para organizar meu cronograma

  Cenário: Vincular tarefa existente a uma data
    Dado que tenho a tarefa "Entrega do TCC" na lista
    Quando seleciono a data "15/08/2025" no calendário
    E associo à tarefa "Entrega do TCC"
    Então a tarefa "Entrega do TCC" deve aparecer marcada no calendário em "15/08/2025"

  Cenário: Alterar data vinculada a uma tarefa
    Dado que a tarefa "Pagar contas" está vinculada à data "10/08/2025"
    Quando altero a data para "12/08/2025"
    Então a tarefa "Pagar contas" deve aparecer marcada no calendário em "12/08/2025"

  Cenário: Vincular tarefa sem selecionar data
    Dado que tenho a tarefa "Levar carro na revisão" na lista
    Quando tento vincular a tarefa sem escolher uma data
    Então devo ver a mensagem "Selecione uma data para vincular"

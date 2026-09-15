# 🚀 Desafio 1 — Verificação de Acesso

> 💻 **Projeto desenvolvido em PHP**

Este projeto tem como objetivo criar um sistema simples para **verificar se uma pessoa pode ter acesso**, utilizando o seu **nome** e **ano de nascimento**.

---

## 🎯 Objetivo

O sistema recebe os dados informados pelo usuário e calcula automaticamente a sua idade.

Depois do cálculo:

🟢 **18 anos ou mais:** acesso permitido.

🔴 **Menos de 18 anos:** acesso negado.

---

## 📝 Informações solicitadas

O formulário solicita:

* 👤 **Nome**
* 📅 **Ano de nascimento**

A idade é calculada automaticamente usando o ano atual.

---

## ⚙️ Como funciona

O programa segue estes passos:

1. 👤 O usuário informa seu nome.
2. 📅 Informa o ano em que nasceu.
3. 🧮 O sistema calcula a idade.
4. 🔎 Verifica se a idade é maior ou igual a 18 anos.
5. ✅ Se tiver 18 anos ou mais, o acesso é permitido.
6. ❌ Se tiver menos de 18 anos, o acesso é negado.
7. 📄 Quando o acesso é permitido, os dados são registrados no arquivo `log_acessos.txt`.

---

## 💻 Tecnologias utilizadas

| Tecnologia  | Utilização                           |
| ----------- | ------------------------------------ |
| 🐘 **PHP**  | Desenvolvimento da lógica do sistema |
| 🌐 **HTML** | Criação e organização do formulário  |
| 📄 **TXT**  | Armazenamento dos acessos permitidos |

---

## 📂 Arquivos do projeto

```text
📁 Desafio 1
│
├── 📄 5a_desafio1.php
├── 📄 README.md
└── 📄 log_acessos.txt
```

> ℹ️ O arquivo `log_acessos.txt` é criado automaticamente pelo programa quando ocorre um acesso permitido.

---

## 🟢 Exemplo de acesso permitido

**Nome:** Vinicius
**Ano de nascimento:** 2008

Resultado:

> ✅ Acesso permitido, Vinicius!

---

## 🔴 Exemplo de acesso negado

**Nome:** João
**Ano de nascimento:** 2012

Resultado:

> ❌ Acesso negado, João!

---

## 📌 O que foi praticado

Neste desafio foram praticados conceitos básicos de:

* 📦 Variáveis
* 📋 Formulários
* 🔀 Estruturas condicionais `if` e `else`
* 📅 Manipulação do ano atual
* 🧮 Cálculo de idade
* 📄 Criação e gravação de arquivos
* 🔁 Recebimento de dados através do método `POST`

---

## 👨‍💻 Projeto

**Desafio 1 — PHP**

Feito para praticar os conhecimentos básicos de **PHP e desenvolvimento web**. 🚀

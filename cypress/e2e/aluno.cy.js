describe('Login - Beth Cientista', () => {

    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/aluno/entrar');
    });

    it('deve carregar a tela de login corretamente', () => {
        cy.contains('h1', 'BETH CIENTISTA')
            .should('be.visible');

        cy.contains('Área exclusiva para clubistas')
            .should('be.visible');

        cy.get('.avatar img')
            .should('be.visible')
            .and('have.attr', 'alt', 'Beth Cientista');

        cy.get('form')
            .should('be.visible');

        cy.get('#email')
            .should('be.visible');

        cy.get('#senha')
            .should('be.visible');

        cy.get('#entrarBtn')
            .should('be.visible')
            .and('contain', 'Entrar');
    });

    it('deve identificar os campos obrigatórios', () => {
        cy.get('#email')
            .should('have.attr', 'required');

        cy.get('#senha')
            .should('have.attr', 'required');
    });

    it('deve validar o formato do e-mail', () => {
        cy.get('#email').type('emailinvalido');

        cy.get('#email').then(($input) => {
            expect($input[0].validity.valid).to.be.false;
        });
    });

    it('deve permitir preencher os campos de login', () => {
        cy.get('#email')
            .type('aluno@exemplo.com')
            .should('have.value', 'aluno@exemplo.com');

        cy.get('#senha')
            .type('senha123')
            .should('have.value', 'senha123');
    });

    it('deve manter a senha oculta por padrão', () => {
        cy.get('#senha')
            .should('have.attr', 'type', 'password');
    });

    it('deve exibir o botão Entrar habilitado', () => {
        cy.get('#entrarBtn')
            .should('be.visible')
            .and('be.enabled')
            .and('have.attr', 'type', 'submit');
    });

    it('deve exibir mensagens de erro quando existirem', () => {
        cy.get('body').then(($body) => {
            if ($body.find('#mensagem').length > 0) {
                cy.get('#mensagem')
                    .should('be.visible')
                    .and('have.class', 'erro');
            }
        });
    });

});
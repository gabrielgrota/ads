package projetoyoutube;
public class Gafanhoto extends Pessoa {
	// atributos
	private String login;
	private int totAssistido;
	
	// construct
	public Gafanhoto(String nome, int idade, String sexo, String login) {
		super(nome, idade, sexo);
		this.login = login;
		this.totAssistido = 0;
	}
	
	// getters e setters
	public String getLogin() {
		return login;
	}
	public void setLogin(String login) {
		this.login = login;
	}
	public int getTotAssistido() {
		return totAssistido;
	}
	public void setTotAssistido(int totAssistido) {
		this.totAssistido = totAssistido;
	}

	@Override
	public String toString() {
		return "Gafanhoto [" + super.toString() + ", login=" + login + ", totAssistido=" + totAssistido + "]";
	}
}
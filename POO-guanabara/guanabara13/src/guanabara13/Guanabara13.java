package guanabara13;
public class Guanabara13 {
	public static void main(String[] args) {
		Cachorro c = new Cachorro();
		
		// frase
		c.reagir("Olá");
		c.reagir("Vai apanhar");
		
		// horário do dia
		c.reagir(11,45);
		c.reagir(19,00);
		
		// se é o dono
		c.reagir(true);
		c.reagir(false);
		
		// peso e idade
		c.reagir(2,12.5f);
		c.reagir(17,4.5f);
		
	}
}
package guanabara;

// prática
public class Notebook {
	String modelo;
	String marca;
	String cor;
	float tamanho;
	String processador;
	int ram;
	int ssd;
	String sistOp;
	boolean ligado;
	
	void status() {
		System.out.println("Modelo: " + this.modelo);
		System.out.println("Marca: " + this.marca);
		System.out.println("Cor: " + this.cor);
		System.out.println("Tamanho: " + this.tamanho);
		System.out.println("Processador: " + this.processador);
		System.out.println("RAM: " + this.ram);
		System.out.println("SSD: " + this.ssd);
		System.out.println("Sistema: " + this.sistOp);
		System.out.println("Esta ligado? " + this.ligado);
	}
	
	void resumo() {
		System.out.println("Este notebook e o novo " + this.modelo + " da " + this.marca + " com a cor " + this.cor + " e seu tamanho de " + this.tamanho + " polegadas. Seu processador e o " + this.processador + " com " + this.ram + "gb de memória RAM e " + this.ssd + "gb de SSD para guardar o que mais importa. Ja vem com o sistema " + this.sistOp + " já pre-instalado na maquina!");
	}
	
	void ligar() {
		this.ligado = true;
	}
	
	void desligar() {
		this.ligado = false;
	}
}

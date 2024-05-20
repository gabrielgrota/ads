package guanabara;

public class NotebookMain {

	public static void main(String[] args) {
		Notebook n1 = new Notebook();
		n1.modelo = "Ideapad 3";
		n1.marca = "Lenovo";
		n1.cor = "Prata";
		n1.tamanho = 15.6f;
		n1.processador = "AMD Ryzen 5";
		n1.ram = 8;
		n1.ssd = 256;
		n1.sistOp = "Windows 10";
		n1.ligar();
		n1.resumo();
	}

}

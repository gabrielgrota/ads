package projetoyoutube;
public class ProjetoYouTube {
	public static void main(String[] args) {
		Video v[] = new Video[3];
		v[0] = new Video("Aula 1 de POO");
		v[1] = new Video("Aula 12 de PHP");
		v[2] = new Video("Aula 10 de HTML5");
		
		Gafanhoto g[] = new Gafanhoto[2];
		g[0] = new Gafanhoto("Gabriel", 21, "M", "gbr");
		g[1] = new Gafanhoto("Pedro", 22, "M", "pdr");
		
		System.out.println("VIDEOS-----------------------------");
		System.out.println(v[0].toString());
		System.out.println(v[1].toString());
		System.out.println(v[2].toString());
		System.out.println("GAFANHOTOS-------------------------");
		System.out.println(g[0].toString());
		System.out.println(g[1].toString());
		
		Visualizacao vis[] = new Visualizacao[5];
		vis[0] = new Visualizacao(g[0], v[2]);
		System.out.println(vis[0].toString());
	}
}
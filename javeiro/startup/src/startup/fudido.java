package startup;

public class fudido {
       private static String nome ;
       private static Double salario;

    public fudido(String nome, Double salario) {
        this.nome = nome;
        this.salario = salario;
    }

    public static String getNome() {
        return nome;
    }

    public static Double getSalario() {
        return salario;
    }

    public static void setNome(String nome) {
        fudido.nome = nome;
    }

    public static void setSalario(Double salario) {
        fudido.salario = salario;
    }
}

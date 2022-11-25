package salaries;

import java.util.function.Function;

public abstract class Worker {
	protected int id;
	protected String firstName;
	protected String lastName;

	public Worker (String firstName, String lastName) throws RuntimeException{

		if(firstName == null || lastName == null) {
			throw new RuntimeException("Il campo non può essere nullo"); // metodo isEmpty per la stringa è meglio
		}

		if (firstName.equals("") || lastName.equals("")){
			throw new RuntimeException("Il campo non può essere vuoto");
		}

		this.firstName = firstName;
		this.lastName = lastName;
		this.id = nextId;

		nextId++;
	}

	@Override
	public boolean equals (Object obj) {
		
		if (this.id == ((Worker) obj).id) {
			return true;
		}
		return false;
	}

	@Override
	public String toString () {
		return "I dati del dipendente sono: " + this.id + " " + this.firstName + " " + this.lastName;
	}
	
	protected static int nextId = 1;

	public abstract double computeSalaryForWeek(WorkWeek workWeek);
}

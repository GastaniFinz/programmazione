package salaries;

public class Employee extends Worker {
    protected static float salary;

    public Employee(String firstName, String lastName) throws Exception {
        super(firstName, lastName);
    }

    public static void setSalary(float salary) throws Exception {
        if (salary <= 10) {
            throw new Exception("Sei un capo avido, e fuorilegge");
        }
        Employee.salary = salary;
    }

    public static float getSalary() {
        return Employee.salary;
    }

    @Override
    public double computeSalaryForWeek(WorkWeek workWeek) {
        return 0;
    }

}

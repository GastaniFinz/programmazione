package salaries;

public class Manager extends Worker{
    protected static float bigSalary = (float) (Employee.getSalary() * 1.5);

    public Manager(String firstName, String lastName) throws Exception {
        super(firstName, lastName);
    }

    @Override
    public double computeSalaryForWeek(WorkWeek workWeek) {
        return 0;
    }
    
}

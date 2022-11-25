package salaries;

public class Employee extends Worker {
    protected static float salary;

    public Employee(String firstName, String lastName) throws RuntimeException {
        super(firstName, lastName);
    }

    public static void setSalary(float salary) throws RuntimeException {
        if (salary <= 10) {
            throw new RuntimeException("Sei un capo avido, e fuorilegge");
        }
        Employee.salary = salary;
    }

    public static float getSalary() {
        return Employee.salary;
    }

    @Override
    public double computeSalaryForWeek(WorkWeek workWeek) {
        double salary = Employee.getSalary();
        double totalWeekPay = 0;
        for (WeekDay day : WeekDay.values()) {
            double dailyHours = workWeek.getHoursOfWork(day);
            double overtimeHours = 0;
            if (dailyHours>8) {
                overtimeHours = dailyHours - 8;
            }
            if (day.bonusPercentage > 0) {
                totalWeekPay += ((dailyHours * 12 + overtimeHours * (12 * 1.1)) * day.bonusPercentage) / 100; 
            }
            totalWeekPay += dailyHours * 12 + overtimeHours * (12 * 1.1);
        }
        return totalWeekPay;
    }

}

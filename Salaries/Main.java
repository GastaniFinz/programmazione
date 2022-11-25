import salaries.*;
import static salaries.WeekDay.*;

public class Main {
    public static void main(String[] args) {
        Employee walter = new Employee("Walter", "Paganini");
        Employee nicholas1 = new Employee("Nicholas", "Penco");
        Employee nicholas2 = new Employee("Nicholas", "Penco");

        WorkWeek walterWorkWeek = new WorkWeek();
        walterWorkWeek.addWorkDay(MONDAY, 8);
        walterWorkWeek.addWorkDay(TUESDAY, 4);
        walterWorkWeek.addWorkDay(WEDNESDAY, 4);
        walterWorkWeek.addWorkDay(THURSDAY, 10);
        walterWorkWeek.addWorkDay(FRIDAY, 8);
        walterWorkWeek.addWorkDay(SATURDAY, 4);

        System.out.println(walter.computeSalaryForWeek(walterWorkWeek));
        
    }
}

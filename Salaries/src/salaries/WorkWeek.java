package salaries;

import java.util.HashMap;
import java.util.Map;

public class WorkWeek {
	private Map<WeekDay, Integer> workdays = new HashMap<>();
	
	public void addWorkDay(WeekDay weekDay, int hoursOfWork) {
		if (hoursOfWork > 10) {
			throw new IllegalArgumentException("Hai superato il limite di ore consentito");
		}
		if (workdays.size() > 6) {
			throw new IllegalArgumentException();
		}
		this.workdays.put(weekDay, hoursOfWork);
	}
	
	public int getHoursOfWork(WeekDay weekDay) {
		return this.workdays.getOrDefault(weekDay, 0);
	}
}

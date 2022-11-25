package salaries;

import java.util.HashMap;
import java.util.Map;

public class WorkWeek {
	private Map<WeekDay, Integer> workdays = new HashMap<>();
	
	public void addWorkDay(WeekDay weekDay, int hoursOfWork) {
		this.workdays.put(weekDay, hoursOfWork);
	}
	
	public int getHoursOfWork(WeekDay weekDay) {
		return this.workdays.getOrDefault(weekDay, 0);
	}
}

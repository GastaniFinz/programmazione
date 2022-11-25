package salaries;

public enum WeekDay {
	MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY(15), SUNDAY(20);
	
	public final int bonusPercentage;
	
	private WeekDay(int bonusPercentage) {
		this.bonusPercentage = bonusPercentage;
	}
	
	private WeekDay() {
		this(0);
	}
}

public class LongTermWarehouse extends Warehouse {
	private Integer minimumMonths;
	private float surchargePercentage;
	
	public LongTermWarehouse(String city, String address, float width, float length, float totalMonthlyCost) {
		super(city, address, width, length, totalMonthlyCost);
		
		this.minimumMonths = null;
		this.surchargePercentage = 0;
	}

	public Integer getMinimumMonths() {
		return minimumMonths;
	}

	public void setMinimumMonths(Integer minimumMonths) {
		this.minimumMonths = minimumMonths;
	}

	public float getSurchargePercentage() {
		return surchargePercentage;
	}

	public void setSurchargePercentage(float surchargePercentage) {
		this.surchargePercentage = surchargePercentage;
	}

	@Override
	public float getTotalRentalCost(int months) {
		float standardRentalCost = super.getTotalRentalCost(months);
		
		if(minimumMonths == null || months >= minimumMonths) {
			return standardRentalCost;
		}
		
		float surchargeAmount = standardRentalCost * (surchargePercentage / 100f);
		return standardRentalCost + surchargeAmount;
	}
	
	@Override
	public String toString() {
		String standardSummary = super.toString();
		
		if(minimumMonths == null || surchargePercentage <= 0) {
			return standardSummary;
		}
		
		String surchargeLine = "Maggiorazione: +" + surchargePercentage + "% sotto i " + minimumMonths + " mesi";
		return standardSummary + "\n" + surchargeLine;
	}
}

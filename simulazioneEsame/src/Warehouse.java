public class Warehouse {
	private String city;
	private String address;
	private float width;
	private float length;
	private float totalMonthlyCost;
	
	public Warehouse(String city, String address, float width, float length, float totalMonthlyCost) {
		this.city = city;
		this.address = address;
		this.width = width;
		this.length = length;
		this.totalMonthlyCost = totalMonthlyCost;
	}
	
	public String getCity() {
		return city;
	}
	
	public String getAddress() {
		return address;
	}
	
	public float getWidth() {
		return width;
	}
	
	public float getLength() {
		return length;
	}
	
	public float getArea() {
		return width * length;
	}
	
	public float getTotalMonthlyCost() {
		return totalMonthlyCost;
	}
	
	public void setTotalMonthlyCost(float totalMonthlyCost) {
		this.totalMonthlyCost = totalMonthlyCost;
	}
	
	public float getMonthlyCostPerSquareMeter() {
		return totalMonthlyCost / getArea();
	}
	
	public float getTotalRentalCost(int months) {
		return months * totalMonthlyCost;
	}
	
	public float compareMonthlyCostPerSquareMeter(Warehouse otherWarehouse) {
		return getMonthlyCostPerSquareMeter() - otherWarehouse.getMonthlyCostPerSquareMeter();
	}
	
	@Override
	public String toString() {
		String locationLine = city + ", " + address;
		String sizeLine = "Dimensioni: " + width + "m x " + length + "m (" + getArea() + "mq)";
		String costLine = "Costo mensile: €" + totalMonthlyCost + " (€" + getMonthlyCostPerSquareMeter() + " per mq)";
		
		return locationLine + "\n" + sizeLine + "\n" + costLine;
	}
}

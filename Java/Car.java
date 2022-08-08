

class Car {
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passenger; 
    
    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver ;
    }

    
    void printDataCar() {
        if (passenger != null){
        System.out.println("License: " + license + " Name Driver: " + driver.name +" Passanger: "+ passenger);
        }
    }

    public Integer getPassanger(){
        return passenger;
    }

    public void setPassanger(Integer passanger){
        if (passanger == 4 ){
        this.passenger = passanger;
        }else{
            System.out.println("Necesitas al menos 4 ocupantes");
        }
    }


    public Integer getId() {
        return id;
    }


    public void setId(Integer id) {
        this.id = id;
    }


    public String getLicense() {
        return license;
    }


    public void setLicense(String license) {
        this.license = license;
    }


    public Account getDriver() {
        return driver;
    }


    public void setDriver(Account driver) {
        this.driver = driver;
    }
    
}

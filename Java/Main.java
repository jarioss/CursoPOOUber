class Main {
    public static void main(String[] args) {
       // System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andrés Herrera", "AND123"), " Cheverolet", "Camaro");
        uberX.setPassanger(4);
        uberX.printDataCar();

        /*Car car2 = new Car("AMQ321", new Account("Andrea Herrería", "ANDA876"));
        car2.passenger = 3;
        car2.printDataCar();*/

        UberVan uberVan = new UberVan("AMD124", new Account("Juan Perez", "121475"));
        uberVan.setPassanger(6);
        uberVan.printDataCar();
    }
}
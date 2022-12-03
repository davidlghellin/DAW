package es.david.app;

import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class MensajeTest {
    @Test
    public void testgetNumber10() {
        assertEquals(10, Mensaje.getNumber10());
    }
}

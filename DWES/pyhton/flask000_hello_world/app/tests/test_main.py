"""Fichero de test de ejemplo"""
from app.main import suma


def test_suma():
    """Test de ejemplo"""
    assert suma(2, 3) == 5

<header>
    <nav>
        <ul>
            <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''  }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ Route::currentRouteName() === 'x' ? 'active' : ''  }}" href="#">Chi Siamo</a></li>
            <li><a class="{{ Route::currentRouteName() === 'x' ? 'active' : ''  }}" href="#">Contatti</a></li>
            <li><a class="{{ Route::currentRouteName() === 'birre' ? 'active' : ''  }}" href="{{ route('birre') }}">Le Nostre Birre</a></li>
        </ul>
    </nav>
</header>

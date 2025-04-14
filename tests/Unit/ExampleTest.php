<?php

// tests/Unit/ApiResponseTest.php

test('returns formatted success response', function () {
    $result = \Exitdump\ApiResponse\ResponseBuilder::success(['name' => 'Jahid']);

    expect($result['status'])->toBe('success');
});
